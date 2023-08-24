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
    protected $signature = 'run';

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
        $numberCollections2 = collect([5, 6, 7, 8, 9, 10]);
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
            ],
            [
                'name' => 'Ivan',
                'age' => 18
            ]
        ]);
        $arrayWorkerCollection = collect([
            [
                'Boris',
                20
            ],
            [
                'Ivan',
                25
            ],
            [
                'Elena',
                18
            ],
            [
                'Ivan',
                18
            ]
        ]);
        $nameCollection = collect(['Ivan', 'Boris', 'Kate', 'Kate']);
        $nameCollection2 = collect([20, 22, 18]);
        $anotherNameCollection = collect(['Ann', 'John']);
        $anotherNameCollection2 = collect(['Ann'=>'boss', 'John'=>'developer']);

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

//        $resoult = $numberCollections->containsStrict('10');


//----------------count--------------------

//        $resoult = $numberCollections->count();


//----------------countBY--------------------

//        $resoult = $anotherNumberCollections->countBY(function ($value){
//            return $value % 10 === 0;
//        });

//----------------crossJoin--------------------

//        $resoult = $nameCollection->crossJoin($anotherNameCollection);

//----------------dd--------------------

//        $resoult = $nameCollection->dd();

//----------------diff--------------------

//        $resoult = $numberCollections2->diff($numberCollections);

//----------------duplicates--------------------

//        $resoult = $nameCollection->duplicates();
//        $resoult = $assocWorkerCollection->duplicates('name');


//----------------each--------------------

//        $map = [];
//        $users->each(function ($user) use ($map){
//            $map[] = $user->name;
//        });

//----------------eachSpread--------------------

//$resoult = $arrayWorkerCollection->eachSpread(function ($name,$age){
//    dd($name,$age);
//});

//----------------except--------------------

//$resoult = $anotherNameCollection2->except(['John']);

//----------------filter--------------------

//$resoult = $anotherNumberCollections->filter(function ($value){
//    return $value % 10 === 0;
//});

//----------------first--------------------

//$resoult = $anotherNumberCollections->first();


//----------------firstOrFail--------------------

//$resoult = $anotherNumberCollections->firstOrFail(function ($value){
//    return $value === 456;
//});

//----------------firstOrFail--------------------

$resoult = $assocWorkerCollection->firstWhere('name','aaa');


        dd($resoult);
//        dd(memory_get_usage() /1024 /1024);
//        $users = User::all();

//        all() - վերադարձնում է բոլոր էլէմենտները
//        avg(),average - վերադարձնում է զանգվածի միջի թվերի միջինը
//        chunk() - Մեթոդ է, որը բաժանում է միքանի Collection-ի , բայց ամեն մեկի մեջ տեղադրում է մեր կողմից տրված արգումենտի քանակությամբ
//        chunkWhile() - Մեթոդ է, որը բաժանում է միքանի Collection-ի , բայց ամեն մեկի մեջ տեղադրում է մեր կողմից տրված արգումենտի քանակությամբ քանի դեռ իռ միջի պայմանը վերադարձնում է true
//        collapse() - Եթե Զանգվածի մեջ ունենք էլի զանգվածներ, ապա այս մեթոդը միացնում է բոլորի վերադարցնելով է զանգված
//        combine() - Մեթոդ է, որը թույլ է տալիս միավորել 2 տարբեր զանգվածներ է ասոցատիվ զանգվածի,որտեղ առաջին զանգվածը դա key-նե իսկ երկրորդը value-ն, եթե երկուսնել ունեն նույն քանակությամբ էլէմենտներ
//        concat() - Մեթոդ է, որը միավորում է առաջին և երկրրորդ զանգվածի էլեմենտները, որպես value
//        contains - Մեթոդ է, որը ստուգում է առկա է արդյոք նշված զանգվածի մեջ մեր կողմից փոխանցած ատրիբուտը, հաշվի առնելով մեծատառերն ու փոքրատառերը,կարող ենք փոխանցել callback function և կատարել տարատեսակ գործողություններ տարբեր պայմաններով հակառակն է անում doesntContain
//        containsOneItem() - Մեթոդ է, որը ստուգում է առկա է արդյոք նշված զանգվածի մեջ մեկ էլէմենտ, եթե այո վերադարձնում է true, եթե ոչ վերադարձնում է false
//        containsStrict - Մեթոդ է, որը ստուգում է առկա է արդյոք նշված զանգվածի մեջ մեր կողմից փոխանցած ատրիբուտը, բայց ստուգելով որպես ղիստ հավասարություն
//        count() - Մեթոդ է, որը վերադարձնում է զանգվածի էլէմենտների քանակը
//        countBy() - Մեթոդ է, որը վերադարձնում է զանգվածի էլէմենտների քանակը մեկ այլ զանգվածի մեջ։ callback ֆւնկցիայի մեյ կարող ենք տալ պայման ու մեթոդը կվերադարդզնի քանակությունը ըստ պայմանի
//        crossJoin() - Մեթոդ է, որը վերադարձնում է զանգվածներ, որի ելեմենտները ղաչաձև միանում են իրի, օրինակ աային զանգվածի առաջին էլեմենտը միանում է երկրորրդ զանգվածի առային ելեմենտին, հետո առաջին զանգվախի աաջին ելեմենտը միանում է երկրորրդ զանգվածի երկրորդ էլեմենտին և այդպես շարունակ
//        dd() - Մեթոդ է, որը վերադարձնում է զանգված, ի տարբերություն միւս dd() մեթոդի, այն ցույց է տալիս առանց collection -Ի
//        diff() - Մեթոդ է, որը վերադարձնում է զանգված,որի մեջ տարբերությունն է առաջին և երկրրորդ զանգվածների, օրինակ եթե մի էլեմենտ կա առաջին զանգվածում, բայց չկա երկրրորդում, դա զույզ կտա զանգվածի մեջ
//        diffAssoc() - Նույն բաննէ անում ինչ diff() մեթոդը, բայց ասոցատիվ զանգվածի հետ
//        duplicates() - Մեթոդ է, որը վերադարձնում է ասոցատիվ զանգված, որի key-ը կրկնվող էլէմոենտի ինդեղն է , իսկ value -ն կրկնվող էլէմենտը
//        duplicatesStrict() -  Նույն բաննէ անում ինչ duplicates() մեթոդը, բայց խիստ հավասարությունով
//        eachSpread() -  Մեթոդ է, որը զանգվածի միջի էլեմենտնեը վերադարձնում է առանին առանձին
//        except() -  Մեթոդ է, որը աշխատում է միյն ասոցատիվ զանգվածների հետ, վերադառձնում է նույն զանգվածը առանց փոխանցած արգումենտի,որը տվյալ զանգվածի քեյը պետք է լինի
//        filter() -  Մեթոդ է, որը առանձնացնում է զանգվածի միյին են էլեմենտները, որոնք բավարարում են մեր կողմից տված պայմանին
//        first() -  Մեթոդ է, որը վերադարձնում է զանգվածի առաջին էլեմենտը, կարող ենք փոխանցել callback function, որը կվերադարձնի պայմանին բավարարող էլեմենտներից առաջինը
//        firstOrFail() -  Մեթոդ է, որը վերադարձնում է զանգվածի առաջին էլեմենտը, եթե չի գտնում՝ վերադարձնում է exception երրոր, որը կարող ենք օգտագործել try catch -ի մեջ
//        firstWhere() -  Մեթոդ է, որը վերադարձնում է ասոցատիվ զանգվածի առաջին էլեմենտը, որը նշում ենք վօրպես արգումենտ key-ը և value-ն, եթե չի գտնում՝ վերադարձնում է null

    }
}
