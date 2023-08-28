<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
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
        $assocWorkerCollection2 = collect([
            [
                'name' => 'Boris_old',
                'age' => 20
            ],
            [
                'name' => 'Ivan_old',
                'age' => 25
            ],
            [
                'name' => 'Elena_old',
                'age' => 18
            ],
            [
                'name' => 'Ivan_new',
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
        $nameCollection = collect(['Ivan', 'Boris']);
        $nameCollections = collect(['Ivan', 'Boris', 'Kate', 'Katerina', "Ashot"]);
        $nameCollection2 = collect([20, 22, 18]);
        $anotherNameCollection = collect(['Ann', 'John']);
        $anotherNameCollection2 = collect(['Ann' => 'boss', 'John' => 'developer']);

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

//$resoult = $assocWorkerCollection->firstWhere('name','aaa');


//----------------flatMap--------------------

//        $resoult = $assocWorkerCollection->flatMap(function ($values) {
//            return [
//                ['new_name' => $values['name'],
//                    'new_age' => $values['age'],
//                ]
//            ];
//        });

//----------------flatten--------------------

//        $resoult = $arrayWorkerCollection->flatten(1);


//----------------flip--------------------

//        $resoult = $anotherNameCollection2->flip();


//----------------forget--------------------

//        $resoult = $anotherNameCollection2->forget('Ann');


//----------------forPage--------------------

//        $resoult = $numberCollections->forPage(3,4);


//----------------get--------------------

//        $resoult = $anotherNameCollection2->get("Ann");


//----------------groupBy--------------------

//        $resoult = $assocWorkerCollection2->groupBy(function ( $value,$key){
//            return substr($value['name'],-3);
//        });

//----------------has--------------------

//        $resoult = $anotherNameCollection2->has('boss');


//----------------hasAny--------------------

//        $resoult = $anotherNameCollection2->hasAny(['Ann','Ashot']);


//----------------implode--------------------

//        $resoult = $assocWorkerCollection->implode('name', ';');


//----------------intersect--------------------

//        $resoult = $nameCollection->intersect($nameCollections);


//----------------isEmpty--------------------

//        $resoult = $nameCollection->isEmpty();


//----------------join--------------------

//        $resoult = $nameCollections->join(',',' AND ');


//----------------keyBy--------------------

//        $resoult = $assocWorkerCollection->keyBy('name');



//----------------keys--------------------

//        $resoult = $anotherNameCollection2->keys();



//----------------macro--------------------

//        Collection::macro('toUpper',function (){
//            return $this->map(function ($value){
//                return Str::upper($value);
//            });
//        });
//
//        $resoult = $nameCollections->toUpper();


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
//        diff() - Մեթոդ է, որը վերադարձնում է զանգված,որի մեջ տարբերությունն է առաջին և երկրրորդ զանգվածների, օրինակ եթե մի էլեմենտ կա առաջին զանգվածում, բայց չկա երկրրորդում, դա ցույց կտա զանգվածի մեջ
//        diffAssoc() - Նույն բաննէ անում ինչ diff() մեթոդը, բայց ասոցատիվ զանգվածի հետ
//        duplicates() - Մեթոդ է, որը վերադարձնում է ասոցատիվ զանգված, որի key-ը կրկնվող էլէմոենտի ինդեղն է , իսկ value -ն կրկնվող էլէմենտը
//        duplicatesStrict() -  Նույն բաննէ անում ինչ duplicates() մեթոդը, բայց խիստ հավասարությունով
//        eachSpread() -  Մեթոդ է, որը զանգվածի միջի էլեմենտնեը վերադարձնում է առանին առանձին
//        except() -  Մեթոդ է, որը աշխատում է միյն ասոցատիվ զանգվածների հետ, վերադառձնում է նույն զանգվածը առանց փոխանցած արգումենտի,որը տվյալ զանգվածի քեյը պետք է լինի
//        filter() -  Մեթոդ է, որը առանձնացնում է զանգվածի միյին են էլեմենտները, որոնք բավարարում են մեր կողմից տված պայմանին
//        first() -  Մեթոդ է, որը վերադարձնում է զանգվածի առաջին էլեմենտը, կարող ենք փոխանցել callback function, որը կվերադարձնի պայմանին բավարարող էլեմենտներից առաջինը
//        firstOrFail() -  Մեթոդ է, որը վերադարձնում է զանգվածի առաջին էլեմենտը, եթե չի գտնում՝ վերադարձնում է exception երրոր, որը կարող ենք օգտագործել try catch -ի մեջ
//        firstWhere() -  Մեթոդ է, որը վերադարձնում է ասոցատիվ զանգվածի առաջին էլեմենտը, որը նշում ենք վօրպես արգումենտ key-ը և value-ն, եթե չի գտնում՝ վերադարձնում է null
//        flatMap() -  Մեթոդ է, որը վերադարձնում է ասոցատիվ զանգված, որի էլեմենտների հետ ինչ կուզենանք կանենք
//        flatMap() -  Մեթոդ է, որը վերադարձնում է ասոցատիվ զանգված, որի էլեմենտների հետ ինչ կուզենանք կանենք
//        flatten() -  Մեթոդ է, որը վերադարձնում է ասոցատիվ զանգված, որի էլեմենտները ուղղակի դասավորվել են հերտականությամբ, եթե զանգվածի մեջ լինի մեկ այլ զանգված դա նույնպես կդառնա հասարակ ասոցատիվ զանգված։ մեջը արգումենտ փոխանցելով կարող ենք որոշոլ թե ինչ խորության վրա աշխատի այն
//        flip() -  Մեթոդ է, որը վերադարձնում է ասոցատիվ զանգված, որի էլեմենտները տեղերով փոխված են այսինքն key -երը value - ների value - ները key -երի
//        forget() -  Մեթոդ է, որը վերադարձնում է նույն collection -ը, որտեղ նշված key-ը ջնջվաշ է
//        forPage() -  Մեթոդ է, որը վերադարձնում է զանգված, որի առաջին արգումենտը՝ թե որ էջն է, իսկ երկրրորդը՝ թե ամեն էջի մեջ քանի էլեմենտ լինի
//        get() -  Մեթոդ է, որը վերադարձնում է collection - ի  key - ի value-ն, ոչ թե ամբողջությամբ, այլ միայն value-ն
//        groupBy() -  Մեթոդ է, որը վերադարձնում է collection - ի էլեմենտները հավաքված մեկ տեղ ըստ մեր նշված պարամետրների
//        has() -  Մեթոդ է, որը շատ նման է contain մեթոդին, բայց ի տարբերություն նրա, սա ման է գալիս ըստ key - երի, եթե փոխանցենք զանգված և փնտրենք միքանի key - եր ապա կվերադարձնի true եթե գտնի բոլոր նշված key - երը
//        hasAny() -  Մեթոդ է, որը շատ նման է hes մեթոդին, բայց ի տարբերություն նրա, սա ման  վերադարձնում է  true եթե գտնի key - երից որևէ մեկը
//        implode() -  Մեթոդ է, որը միացնում է մեր կոմից նշված value - ները ըստ մեր կողմից նշված նշանի և վեևադարձնում է string
//        intersect() -  Մեթոդ է, որը diff() - մեթոդի հակառակն է անում, այսինքն վերադարձնում է զանգված, որի մեջ ցույց է տալիս տե առաջին և երկրրերդ զանգվածների մեջ ինչ ընդանուր էլեմենտներ կան
//        isEmpty() -  Մեթոդ է, որը ստուգում է թե արդյոք collection -ը դատարկ է թե չե, եթե դատարկ է ՝ ապա վերադարձնում է true
//        isNotEmpty() -  Մեթոդ է, որը ստուգում է թե արդյոք collection -ը դատարկ է թե չե, եթե դատարկ չէ ՝ ապա վերադարձնում է true
//        join() -  Մեթոդ է, որը նույն implode մեթոդի նաման է աշխատում, բայց ի տարբերություն նրա, եստեղ կարող ենք ընտրել, թե նախավերջին կամ վերջին էլեմենտները ինչով առանձնանան
//        keyBy() -  Մեթոդ է, որը collection -ններն ավելացնում է key, ըստ մեր տված արժեքի
//        keys() -  Մեթոդ է, որը collection -ններն ավելացնում է key
//        lazy() -  Մեթոդ է, որը collection -նները վերածում է lazyCollection - ի, իս դա իր հերթին նախատեսված է մեծ տվյալների հետ աշխատելու համար, քանի որ քիչ հիշողություն է զբաղեցնում
//        macro() -  Մեթոդ է, որը թույլ է տալիս ստեղծել մեր ուզած մեթոդը, և գրել պետկ է app->Providers->AppServiceProvider->boot() մեթոդում, որովհետև երբ ծրագիրը միանումէ առաջինը աշխատում է սա
    }
}
