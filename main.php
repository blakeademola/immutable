<?php
   function listSort($Original_List,$Add_List,$Delete_List)
    {
       if(!is_array($Original_List) || !is_array($Add_List) || !is_array($Delete_List)){
           return 'one value is not an array';
       }
       $data  = [];
       $val = array_unique(array_merge($Original_List,$Add_List));
       $deleted =  array_diff($val,$Delete_List);
     return ($deleted);
    }

     $Original_List = ['one', 'two', 'three'];
      $Add_List = ['one', 'two', 'five', 'six'];
       $Delete_List = ['two', 'five'];

        print_r (listSort($Original_List,$Add_List,$Delete_List));