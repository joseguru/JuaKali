<?php

class Rating extends Eloquent
{
    public static $timestamps = true;

    public function user()
    {
        return $this->belongs_to('User');
    }

    /**
     * Rate a User
     *
     * @author mogetutu <imogetutu@gmail.com>
     * @return json
     */
    public static function createRating()
    {
        $input = Input::all();
        $rules = array(
                'user_id' => 'required|exists:users,id',
                'rating' => 'required|integer|max:5|min:1',
                'worker_id' => 'required|exists:users,id'
            );
        $validation = Validator::make($input, $rules);
        if($validation->fails())
        {
            return Response::json($validation->errors);
        }

        $rating = Rating::create($input);
        // Update rating on user account
        User::updateRating($input['worker_id']);
        if($rating)
        {
            return Response::json("true");
        }

        return Response::json("false");
    }

}
