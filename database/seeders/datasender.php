<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\datasend;

class datasender extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lawyers=collect(
            [
                [
                    "firstname"=>"Rene",
                    "lastname"=>"Raniels",
                    "description"=>"
                    Travelling salesman - and above it there hung a picture that he had. Recently cut out of an illustrated magazine and housed in a nice It showed a lady fitted out with a fur hat and fur boa who sat",
                    "gender"=>"Male",
                    "fee"=>"287",
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
                    "firstname"=>"Ruth",
                    "lastname"=>"Christian",
                    "description"=>"Travelling salesman - and above it there hung a picture that he had. Recently cut out of an illustrated magazine and housed in a nice It showed a lady fitted out with a fur hat and fur boa who sat",
                    "gender"=>"Male",
                    "fee"=>"350",
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
                    "firstname"=>"Gregory",
                    "lastname"=>"Kaster",
                    "description"=>"Travelling salesman - and above it there hung a picture that he had. Recently cut out of an illustrated magazine and housed in a nice It showed a lady fitted out with a fur hat and fur boa who sat",
                    "gender"=>"Female",
                    "fee"=>"235",
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
                    "firstname"=>"John",
                    "lastname"=>"Ierrante",
                    "description"=>"Travelling salesman - and above it there hung a picture that he had. Recently cut out of an illustrated magazine and housed in a nice It showed a lady fitted out with a fur hat and fur boa who sat",
                    "gender"=>"Male",
                    "fee"=>"380",
                    "country"=>"England",
                    "city"=>"London",
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
                    "firstname"=>"Betty",
                    "lastname"=>"Doyle",
                    "description"=>"Travelling salesman - and above it there hung a picture that he had. Recently cut out of an illustrated magazine and housed in a nice It showed a lady fitted out with a fur hat and fur boa who sat",
                    "gender"=>"Male",
                    "fee"=>"287",
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
                    "firstname"=>"David",
                    "lastname"=>"Finch",
                    "description"=>"Travelling salesman - and above it there hung a picture that he had. Recently cut out of an illustrated magazine and housed in a nice It showed a lady fitted out with a fur hat and fur boa who sat",
                    "gender"=>"Male",
                    "fee"=>"400",
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
            datasend::insert($lawyers);
        });
    }
}
