<x-header data="Arafat"/>
<h2>Hello Bangladesh!</h2>

<h3>Global Middleware</h3>
<li>It provides a conveninet
     machanism  for inspecting and filtering HTTP
     request entering an application <strong>for a group for specific pages</strong></li>



     <h3>How to set up a group middleware </h3>
    <li><strong>In route Route::view('','')->middleware(['routeMiddlewareName1,routeMiddlewareName1']);</strong></li>
    <li>php artisna make:middleware AgeCheck</li>
    <li>Go to <strong>App\Http\Middleware\AgeCheck</strong></li>
    <li>Set the condition in handle function</li>
    <li>Go to <strong>App\Http\Kernel</strong></li>
    <li>Set the path of our created middleware into rotue middleware  like 'routeMiddlewareName1'=>\App\.....\AgeCheck</li>
     <li>We create a middleware named AgeCheck which is responsible to check age of users. 
         if the user is 18+ then access webpage otherwise not!
     </li>
     <li>to check: <li>root/pagename/?age=17</li>
     <li>root/pagename/?age=20</li>
    </li>




<!--OK-->