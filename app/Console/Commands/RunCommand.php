<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use function GuzzleHttp\Promise\all;

class RunCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:run-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $numberCollections = collect([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
        $anotherNumberCollections = collect([10, 20, 30, 245, 40, 50, 69]);
        $assocWorkerCollection = collect([
            [
                'name' => 'Boris',
                'age' => 20
            ],
            [
                'name' => 'Ivan',
                'age' => 25
            ],
            [
                'name' => 'Elena',
                'age' => 18
            ]
        ]);
        $nameCollection = collect(['Ivan', 'Boris', 'Kate']);
        $nameCollection2 = collect([20, 22, 18]);
        $anotherNameCollection = collect(['Ann', 'John']);

//----------------avg--------------------

//        dd($numberCollections->avg());

//----------------chunk--------------------

//        $result = $numberCollections->chunk(2);

//----------------chunkWhile--------------------

//        $resoult = $anotherNumberCollections->chunkWhile(function ($value, $key, $collection) {
//            return $value % 10 === 0;
//        });

//----------------collapse--------------------

//        $collection = collect([
//            [1, 2, 3],
//            [4, 5, 6],
//            [7, 8, 9],
//        ]);

//        $resoult = $collection->collapse();

//----------------collapse--------------------

//        $resoult = $nameCollection->combine($nameCollection2);

//----------------concat--------------------

//        $resoult = $nameCollection->concat($nameCollection2);

//----------------contains--------------------

//        $resoult = $nameCollection->contains('Ivan');

//----------------containsOneItem--------------------

//        $resoult = $nameCollection->containsOneItem();


//----------------containsStrict--------------------

        $resoult = $numberCollections->containsStrict('10');


//----------------each--------------------

//        $map = [];
//        $users->each(function ($user) use ($map){
//            $map[] = $user->name;
//        });

//
        dd($resoult);
//        dd(memory_get_usage() /1024 /1024);
//        $users = User::all();

//        all() - վերադարձնում է բոլոր էլէմենտները
//        avg(),average - վերադարձնում է զանգվածի միջի թվերի միջինը
//        chunk() - Collection-ը բաժանում է միքանի Collection-ի , բայց ամեն մեկի մեջ տեղադրում է մեր կողմից տրված արգումենտի քանակությամբ
//        chunkWhile() - Collection-ը բաժանում է միքանի Collection-ի , բայց ամեն մեկի մեջ տեղադրում է մեր կողմից տրված արգումենտի քանակությամբ քանի դեռ իռ միջի պայմանը վերադարձնում է true
//        collapse() - Եթե Զանգվածի մեջ ունենք էլի զանգվածներ, ապա այս մեթոդը միացնում է բոլորի վերադարձնելով է զանգված
//        combine() - Մեթոդ է, որը թույլ է տալիս միավորել թ տարբեր զանգվածներ է ասոցատիվ զանգվածի,որտեղ առաջին զանգվածը դա key-նե իսկ երկրորդը value-ն, եթե երկուսնել ունեն նույն քանակությամբ էլէմենտներ
//        concat() - Մեթոդ է, որը միավորում է առաջին և երկրրորդ զանգվածի էլեմենտները, որպես value
//        contains - Մեթոդ է, որը ստուգում է առկա է արդյոք նշված զանգվածի մեջ մեր կողմից փոխանցած ատրիբուտը, հաշվի առնելով մեծատառերն ու փոքրատառերը,կարող ենք փոխանցել callback function և կատարել տարատեսակ գործողություններ տարբեր պայմաններով հակառակն է անում doesntContain
//        containsOneItem() - Մեթոդ է, որը ստուգում է առկա է արդյոք նշված զանգվածի մեջ մեկ էլէմենտ, եթե այո վերադարձնում է true, եթե ոչ վերադարձնում է false
//        containsStrict - Մեթոդ է, որը ստուգում է առկա է արդյոք նշված զանգվածի մեջ մեր կողմից փոխանցած ատրիբուտը, բայց ստուգելով որպես ղիստ հավասարություն

    }
}
