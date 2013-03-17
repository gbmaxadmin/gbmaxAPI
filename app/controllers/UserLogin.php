<?php

class UserLogin extends BaseController {


		/**
		 * Display a hint on how this end point is used.
		 *
		 * @return Response
		 */
    public function getIndex()
    {
        //
    	return "send POST with: { 'username':[username],'password':[password] }";
    }


		/**
		 * Attempt to log user in.
		 *
		 * @return Response
		 */
    public function postIndex()
    {
        //
    }

}