<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FormData;

class profiledatasender extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lawyers=collect(
            [
                [
                    'user_id' => 1,
                    "firstname"=>"Rene",
                    "lastname"=>"Raniels",
                    "description"=>"
                    Travelling salesman - and above it there hung a picture that he had. Recently cut out of an illustrated magazine and housed in a nice It showed a lady fitted out with a fur hat and fur boa who sat",
                    "gender"=>"Male",
                    "fee"=>"287",
                    "category"=>"RealState",
                    "country"=>"Australia",
                    "city"=>"Sydney",
                    "educationinfo"=>"Assosiate, Attorlytic",
                    "additionalinfo"=>"Seniour Attorny",
                    "specializeinfo"=>"Family Law",
                    "about"=>"Education

                    Travelling salesman - and above it there hung a picture that he had.
                    
                    Recently cut out of an illustrated magazine and housed in a nice
                    
                    It showed a lady fitted out with a fur hat and fur boa who sat
                    
                    Academy University School of Law, Boston, MA
                    
                    The Syntify High School Of New York
                    
                    Completed Cases
                    
                    Travelling salesman - and above it there hung a picture that he had.
                    
                    Recently cut out of an illustrated magazine and housed in a nice
                    
                    It showed a lady fitted out with a fur hat and fur boa who sat
                    
                    Academy University School of Law, Boston, MA
                    
                    The Syntify High School Of New York",
                    "image"=>"100000.png",
                ],
                [
                    'user_id' => 2,
                    "firstname"=>"Ruth",
                    "lastname"=>"Christian",
                    "description"=>"Travelling salesman - and above it there hung a picture that he had. Recently cut out of an illustrated magazine and housed in a nice It showed a lady fitted out with a fur hat and fur boa who sat",
                    "gender"=>"Male",
                    "fee"=>"350",
                    "category"=>"Personal",
                    "country"=>"Ireland",
                    "city"=>"Auckland",
                    "educationinfo"=>"Attorlytic",
                    "additionalinfo"=>"Seniour Attorny",
                    "specializeinfo"=>"Family Law, Agricultural",
                    "about"=>"Education

                    Travelling salesman - and above it there hung a picture that he had.
                    
                    Recently cut out of an illustrated magazine and housed in a nice
                    
                    It showed a lady fitted out with a fur hat and fur boa who sat
                    
                    Academy University School of Law, Boston, MA
                    
                    The Syntify High School Of New York
                    
                    Completed Cases
                    
                    Travelling salesman - and above it there hung a picture that he had.
                    
                    Recently cut out of an illustrated magazine and housed in a nice
                    
                    It showed a lady fitted out with a fur hat and fur boa who sat
                    
                    Academy University School of Law, Boston, MA
                    
                    The Syntify High School Of New York",
                    "image"=>"200000.png",
                ],
                [
                    'user_id' => 3,
                    "firstname"=>"Gregory",
                    "lastname"=>"Kaster",
                    "description"=>"Travelling salesman - and above it there hung a picture that he had. Recently cut out of an illustrated magazine and housed in a nice It showed a lady fitted out with a fur hat and fur boa who sat",
                    "gender"=>"Female",
                    "fee"=>"235",
                    "category"=>"RealState",
                    "country"=>"United States",
                    "city"=>"New York",
                    "educationinfo"=>"Assosiate, Attorlytic",
                    "additionalinfo"=>"Seniour Attorny",
                    "specializeinfo"=>"Family Law",
                    "about"=>"Education

                    Travelling salesman - and above it there hung a picture that he had.
                    
                    Recently cut out of an illustrated magazine and housed in a nice
                    
                    It showed a lady fitted out with a fur hat and fur boa who sat
                    
                    Academy University School of Law, Boston, MA
                    
                    The Syntify High School Of New York
                    
                    Completed Cases
                    
                    Travelling salesman - and above it there hung a picture that he had.
                    
                    Recently cut out of an illustrated magazine and housed in a nice
                    
                    It showed a lady fitted out with a fur hat and fur boa who sat
                    
                    Academy University School of Law, Boston, MA
                    
                    The Syntify High School Of New York",
                    "image"=>"300000.png",
                ],
                [
                    'user_id' => 4,
                    "firstname"=>"John",
                    "lastname"=>"Ierrante",
                    "description"=>"Travelling salesman - and above it there hung a picture that he had. Recently cut out of an illustrated magazine and housed in a nice It showed a lady fitted out with a fur hat and fur boa who sat",
                    "gender"=>"Male",
                    "fee"=>"380",
                    "category"=>"Personal",
                    "country"=>"London",
                    "city"=>"England",
                    "educationinfo"=>"Assosiate, Attorlytic",
                    "additionalinfo"=>"Attorny",
                    "specializeinfo"=>"Family Law",
                    "about"=>"Education

                    Travelling salesman - and above it there hung a picture that he had.
                    
                    Recently cut out of an illustrated magazine and housed in a nice
                    
                    It showed a lady fitted out with a fur hat and fur boa who sat
                    
                    Academy University School of Law, Boston, MA
                    
                    The Syntify High School Of New York
                    
                    Completed Cases
                    
                    Travelling salesman - and above it there hung a picture that he had.
                    
                    Recently cut out of an illustrated magazine and housed in a nice
                    
                    It showed a lady fitted out with a fur hat and fur boa who sat
                    
                    Academy University School of Law, Boston, MA
                    
                    The Syntify High School Of New York",
                    "image"=>"400000.png",
                ],
                [
                    'user_id' => 5,
                    "firstname"=>"Betty",
                    "lastname"=>"Doyle",
                    "description"=>"Travelling salesman - and above it there hung a picture that he had. Recently cut out of an illustrated magazine and housed in a nice It showed a lady fitted out with a fur hat and fur boa who sat",
                    "gender"=>"Male",
                    "fee"=>"287",
                    "category"=>"Business",
                    "country"=>"Australia",
                    "city"=>"Melborn",
                    "educationinfo"=>"Assosiate, Attorlytic",
                    "additionalinfo"=>"Seniour Attorny",
                    "specializeinfo"=>"Family Law",
                    "about"=>"Education

                    Travelling salesman - and above it there hung a picture that he had.
                    
                    Recently cut out of an illustrated magazine and housed in a nice
                    
                    It showed a lady fitted out with a fur hat and fur boa who sat
                    
                    Academy University School of Law, Boston, MA
                    
                    The Syntify High School Of New York
                    
                    Completed Cases
                    
                    Travelling salesman - and above it there hung a picture that he had.
                    
                    Recently cut out of an illustrated magazine and housed in a nice
                    
                    It showed a lady fitted out with a fur hat and fur boa who sat
                    
                    Academy University School of Law, Boston, MA
                    
                    The Syntify High School Of New York",
                    "image"=>"500000.png",
                ],
                [
                    'user_id' => 6,
                    "firstname"=>"David",
                    "lastname"=>"Finch",
                    "description"=>"Travelling salesman - and above it there hung a picture that he had. Recently cut out of an illustrated magazine and housed in a nice It showed a lady fitted out with a fur hat and fur boa who sat",
                    "gender"=>"Male",
                    "fee"=>"400",
                    "category"=>"Criminal",
                    "country"=>"Iran",
                    "city"=>"Tehran",
                    "educationinfo"=>"Assosiate, Attorlytic",
                    "additionalinfo"=>"Seniour Attorny",
                    "specializeinfo"=>"Family Law",
                    "about"=>"Education

                    Travelling salesman - and above it there hung a picture that he had.
                    
                    Recently cut out of an illustrated magazine and housed in a nice
                    
                    It showed a lady fitted out with a fur hat and fur boa who sat
                    
                    Academy University School of Law, Boston, MA
                    
                    The Syntify High School Of New York
                    
                    Completed Cases
                    
                    Travelling salesman - and above it there hung a picture that he had.
                    
                    Recently cut out of an illustrated magazine and housed in a nice
                    
                    It showed a lady fitted out with a fur hat and fur boa who sat
                    
                    Academy University School of Law, Boston, MA
                    
                    The Syntify High School Of New York",
                    "image"=>"600000.png",
                ]
            ]
        );
        $lawyers->each(function($lawyers){
            FormData::insert($lawyers);
        });
    }
}
