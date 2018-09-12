<?php
namespace App\Http\Controllers;

class PagesController extends Controller{
public function getIndex()
{
    return view('pages.welcome');
}
public function getContact()
{
    return view('pages.contact');
}
public function getAbout()
{
    $first= 'Mohammed';
    $last= 'Shabeer';
    $full= $first . " " . $last;
    $email= 'shabeerklr94@gmail.com';
    $num='9567623651';
    
    return view('pages.about')->with("fullname", $full)->withEmail($email)->withNum($num);
}
}
?>