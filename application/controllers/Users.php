<?php

class users extends CI_Controller
{

    public function show($user_id)
    {
//        $this->load->view('user_model');

        $data['results'] = $this->user_model->get_users($user_id, 'kamrul');


        $this->load->view('user_view', $data);


//       foreach ($result as $object){
//
//           echo $object->username . '<br/>';
//       }


    }

    public function insert()
    {

        $username = "mkhsojib";
        $password = "123";

        $this->user_model->create_users([

            'username' => $username,
            'password' => $password

        ]);


    }



    public function update()
    {

        $id = 3;

        $username = "nirob";
        $password = "1234";

        $this->user_model->update_users([

            'username' => $username,
            'password' => $password

        ], $id);


    }


    public function delete()
    {

        $id = 3;

        $this->user_model->delete_users( $id);

    }


}