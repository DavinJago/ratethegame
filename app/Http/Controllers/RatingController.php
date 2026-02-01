<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RatingController extends Controller
{
    public function store(Request $request)
    {
        \Log::info('Rating request:', $request->all());

        $validator = Validator::make($request->all(), [
            'rating' => 'required|integer|min:1|max:10',
            'user_id' => 'required|integer'
        ]);

        if ($validator->fails()) {
            \Log::error('Validation failed:', $validator->errors()->toArray());
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $user_id = $request->user_id;

        $user = \App\Models\User::find($user_id);
        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'User not found'
            ], 404);
        }

        try {
            $rating = Rating::updateOrCreate(
                ['user_id' => $user_id],
                ['rating' => $request->rating]
            );

            $averageRating = Rating::avg('rating');
            $totalRatings = Rating::count();

            return response()->json([
                'success' => true,
                'message' => 'Rating saved successfully!',
                'user_rating' => $rating->rating,
                'average_rating' => round($averageRating, 1),
                'total_ratings' => $totalRatings
            ]);
        } catch (\Exception $e) {
            \Log::error('Rating error:', ['error' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'Failed to save rating: ' . $e->getMessage()
            ], 500);
        }
    }

    public function getUserRating(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|integer|exists:users,id'
        ]);

        if ($validator->fails()) {
            return response()->json(['rating' => null]);
        }

        $rating = Rating::where('user_id', $request->user_id)->first();

        return response()->json([
            'rating' => $rating ? $rating->rating : null
        ]);
    }

    public function getStats()
    {
        $ratings = Rating::all();
        
        $total = $ratings->count();
        $average = $total > 0 ? $ratings->avg('rating') : 0;
        
        $distribution = [];
        for ($i = 1; $i <= 10; $i++) {
            $distribution[$i] = $ratings->where('rating', $i)->count();
        }

        return response()->json([
            'total_ratings' => $total,
            'average_rating' => round($average, 1),
            'distribution' => $distribution
        ]);
    }

    public function deleteRating(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|integer|exists:users,id'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'User ID is required'
            ], 422);
        }

        try {
            $deleted = Rating::where('user_id', $request->user_id)->delete();

            if ($deleted) {
                $averageRating = Rating::avg('rating') ?? 0;
                $totalRatings = Rating::count();

                return response()->json([
                    'success' => true,
                    'message' => 'Rating deleted successfully!',
                    'average_rating' => round($averageRating, 1),
                    'total_ratings' => $totalRatings
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'No rating found to delete'
                ], 404);
            }
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error deleting rating: ' . $e->getMessage()
            ], 500);
        }
    }
}