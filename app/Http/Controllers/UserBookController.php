<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use App\Book;

class UserBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id_user)
    {
        $user=User::find($id_user);
        if(!empty($user))
        {
            $books = User::find($id_user)->book;
            if(count($books)>0)
            {
                return response()->json($books,200);
            }
            else
            {
                return response()->json("User with id=".$id_user." hasn't books from library.",200);
            }
        }
        else{
            return response()->json("There is no user with  id=".$id_user,404);
        }
    }


    public function update($id_user,$id_book)
    {

        $user=User::find($id_user);

        if(!empty($user))
        {
            $book=Book::find($id_book);
            if(!empty($book))
            {

                if($book->user_id==null)
                {
                    $book->user_id=$id_user;

                    $book->save();
                    return response()->json("User got the book with id=".$id_book,200);
                }
                else
                {
                    return response()->json("Another reader has got this book. It is not in library now.",404);
                }
            }
            else
            {
                return response()->json("There is no book with id=".$id_book." in the library.",404);
            }
        }
        else
        {
            return response()->json("There is no user with  id=".$id_user,404);
        }
    }

}
