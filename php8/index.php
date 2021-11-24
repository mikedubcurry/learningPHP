<?php

// class User
// {
//     public function profile()
//     {
//         return new Profile;
//         // return null;
//     }
// }

// class Profile
// {
//     public function employment()
//     {
//         return 'web developer';
//     }
// }


// $user = new User;

// // $profile = $user->profile();

// // if($profile) {
// //     echo $profile->employment();
// // }

// echo $user->profile()?->employment() ?? 'not provided';

// class Conversation
// {
// }

// $obj = new Conversation();

// switch ($obj::class) {
//     case 'Conversation':
//         $type = 'started_conversation';
//         break;

//     case 'Reply':
//         $type = 'replied_to_comment';
//         break;

//     case 'Comment':
//         $type = 'commented_on_lesson';
//         break;
// }
// // $type = match (get_class($obj)) {
// //     'Conversation' => 'started_conversation',
// //     'Reply' => 'replied_to_comment',
// //     'Comment' => 'commented_on_lesson'
// // };

// echo $type;

// class User
// {
//     // protected $name;

//     public function __construct(protected $name)
//     {
//         // $this->name = $name;
//     }
// }

// class Plan
// {
//     // protected $name;
//     public function __construct(protected string $name = 'Daily')
//     {
//         // $this->name = $name;
//     }
// }

// class Signup
// {
//     // protected User $user;

//     // protected Plan $plan;

//     public function __construct(
//         protected User $user,
//         protected Plan $plan
//     ) {
//         // $this->user = $user;
//         // $this->plan = $plan;
//     }
// }

// $user = new User('Michael');

// $plan = new Plan();

// $signup = new Signup($user, $plan);

// var_dump($signup);

// class Invoice
// {
//     public function __construct(
//         private $description,
//         private $total,
//         private $date,
//         private $paid
//     ) {
//     }
// }

// $invoice = new Invoice(
//     description: 'customer installation',
//     total: 10000,
//     date: new DateTime(),
//     paid: true
// );

// var_dump($invoice);

// $id = 'asdfsdflasdfa_ch';
// // $id = 'asdfsdflasdfa_inv';
// // $id = 'asdfsdflasdfa_sub';

// $result = str_contains($id, '_ch');

// var_dump($result);

// $map = new WeakMap();

// $obj = new stdClass();

// $map[$obj] = 'hi';

// var_dump($map);

// unset($obj);

// var_dump($map);


class User
{
    public function makeFriendsWith(User|string $user)
    {
        var_dump('Yay friends');
    }
}

$joe = new User;
$mike = new User;

$joe->makeFriendsWith('mike');
