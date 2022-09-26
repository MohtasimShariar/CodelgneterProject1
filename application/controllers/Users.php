<?php
class Users extends CI_Controller
{
    //First function method
    public function index()
    {

        //data fatch start
        $this->load->model('User_model');

        $users = $this->User_model->getUsers();
        $data = array();

        $data['users'] = $users;

        $this->load->view('Users/list', $data);
        //data fatch end

        //view folder User.php calling 
        // $this -> load -> view('Users/User');
    }
    //2nd function method
    public function user()
    {

        //load model and enter the model file name: Users_model.php.
        $this->load->model('User_model');

        // load list of form validation
        $this->load->library('form_validation');

        //set rule for the user input field
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == true) {
            // print_r($_POST);//Array ( [name] => Md.Mohtasim Shariar [email] => onim01@gmail.com )

            //Post the input data.  
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $date = date('Y-m-d h:i:s');

            $formData = array('name' => $name, 'email' => $email, 'created_at' => $date);

            $this->User_model->add_user($formData);

            $this->session->set_flashdata('massage', 'Recording data successfully');
            // redirect to  index page
            redirect(base_url('users/index'));
        } else {
            $this->load->view('Users/User');
        }
    }
}
