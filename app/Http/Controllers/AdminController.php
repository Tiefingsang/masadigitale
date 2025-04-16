<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\SocialNetwork;
use App\Models\User;
use App\Models\About;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Technology;
use App\Models\Project;
use App\Models\Client;
use App\Models\Newsletter;
use App\Models\Contact;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function admin(Request $request)
    {
        return view('admin.pages.home.index');
    }

    public function adminBlog(Request $request)
    {
        // code to get blog
        return view('admin.pages.blog.index');
    }



    public function adminAboutEdit(Request $request)
    {
        $data=About::first();
        return view('admin.pages.about.edit', compact('data'));
    }

    public function adminUpdate(Request $request)
    {
        // code to get blog
        $about=About::first();

        $about->title=$request->title;
        $about->description=$request->description;
        $about->image=$request->image;
        $saved=$about->save();

        if($saved){
            session()->flash('seccess', 'Modifier avec success!');
        }else{
            session()->flash('error', 'Erreur de modification !');
        }
        return back();
    }


    public function adminBlogDetails(Request $request)
    {
        $blog=Blog::first();
        // code to get blog details
        return view('admin.pages.blog.show', compact('blog'));
    }

    public function adminBlogUpdate(Request $request){
        dd($request->slug);
        $blog=Blog::first();

        $blog->title= $request->title;
        $blog->content= $request->content;
        $blog->slug= $request->slug;
        $blog->image= $request->image;

        $saved=$blog->update();
    }

    public function adminContact(Request $request)
    {
        // code to get contact
        return view('admin.pages.contact.index');
    }

    public function adminProjects(Request $request)
    {
        // code to get all projects
        return view('admin.pages.project.index');
    }

    public function adminProjectDetail(Request $request)
    {
        // code to get project detail
        return view('admin.pages.project.show');
    }

    public function adminNewsLetter(Request $request)
    {
        // code to get newsletter
        return view('admin.pages.newsletter.index');
    }

    public function adminComments(Request $request)
    {
        // code to get all comments
        return view('admin.pages.comment.index');
    }

    public function adminCommentsShow(Request $request, $id)
    {
        // code to show comment
        return view('admin.pages.comment.show');
    }

    public function adminCommentsEdit(Request $request, $id)
    {
        // code to edit comment
        return view('admin.pages.comment.edit');
    }

    public function adminCommentsDelete(Request $request, $id)
    {
        // code to edit comment

    }


    public function adminCommentsDestroy(Request $request, $id)
    {
        // code to destroy comment
    }

    public function adminProfil(){

        $userinfo=User::first();
       // dd($userinfo);

        return view('admin.pages.profil.index', compact('userinfo'));

    }

    public function adminRegister(){

        return view('admin.pages.login.register');
    }

    public function adminRegisterStore(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ],[
            'name.required'=>'Entrer votre nom complet',
            'email.required'=>'Entrer votre email',
            'Password.required'=>'Entrer un mot de passe'
        ]);

        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'Password'=>Hash::make($request->password),
        ]);

        if ($user) {
            return view('admin.pages.login.login');
        }else{
            return back();
        }


    }



    public function adminLogin(){

        return view('admin.pages.login.login');
    }

    public function adminLoginStore(Request $request){
        $request->validate([

            'email'=> 'required|email|exists:users,email',
            'password'=>'required|min:6',
        ],[
            'email.required'=>'Veillez entrer votre nom ou votre email',
            //'password.min'=>'Veillez entrer un mot de passe plus de 6 caractères',
            'password.required'=>'Veillez entrer un mot de passe correct',
            //'login_id.required'=>'Veillez entrer votre adresse email',
            //'login_id.email'=>'Votre email n\'est pas correct',
            //'login_id.unique'=>'Votre email est déjà utiliser',
        ]);


        $cle=array(
            'email'=>$request->email,
            'password'=>$request->password,

        );
        if (Auth::attempt($cle)) {
            session()->regenerate();

            return redirect()->route('admin.index');
            session()->flash('seccess', 'Connexion success!');
        }else{
            session()->flash('fail', 'Erreur de connexion. Veuillez réessayer.');
            return redirect()->back();
        }
    }

    public function logout(){
        Auth::logout();

        return to_route('admin.login')->with('vous êtes deconnecté');
    }

    public function adminProfilUpdate(Request $request){
        $admin= User::findOrFail($request->id);
        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $imageName = 'ADMIN'.time() . '.' . $image->getClientOriginalExtension(); // Générer un nom unique pour l'image
            $image->move(public_path('images/admin'), $imageName); // Déplacer l'image vers le dossier de destination

            // Mettre à jour l'image dans la base de données
            $admin->image = $imageName;
            $admin->save();

            // Supprimer l'ancienne image si elle existe
            if ($admin->image) {
                Storage::disk('public')->delete($admin->image);
            }

            // Mettre à jour le chemin de l'image dans la base de données
            //$admin->picture = $imagePath;
        }


        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->address = $request->address;
        $admin->country = $request->country;
        $admin->cv = $request->cv;
        $admin->profession = $request->profession;
        //$admin->image = $request->image;

        $admin->save();

        return back();
    }


    public function adminServiceAdd(Request $request){

        return view('admin.pages.service.index');
    }

    public function adminServiceStore(Request $request){
        $services=Service::get();
        $request->validate([
            'title'=>'required',
            'short'=>'required',
            'image'=>'required',
            'prix_min'=>'required',
        ],[
            'name.required'=>'Entrer votre nom complet',
            'email.required'=>'Entrer votre email',
            'Password.required'=>'Entrer un mot de passe'
        ]);

        $service=Service::create([
            'title'=>$request->title,
            'short'=>$request->short,
            'description'=>$request->description,
            'image'=>$request->image,
            'prix_min'=>$request->prix_min,
            'prix_max'=>$request->prix_max,

        ]);

        if ($service) {
            return view('admin.pages.service.show', compact('services'));
        }else{
            return back();
        }
    }

    public function adminServiceList(Request $request){
        $services=Service::get();
        return view('admin.pages.service.show', compact('services'));
    }

    public function adminServiceEdit(Request $request){
        $service=Service::where('id', $request->id)->first();

        return view('admin.pages.service.edite', compact('service'));
    }

    public function adminServiceUpdate(Request $request){
        $service=Service::findOrFail($request->id);

        $service->title= $request->title;
        $service->description= $request->description;
        $service->short= $request->short;
        $service->image= $request->image;
        $service->prix_min= $request->prix_min;
        $service->prix_max= $request->prix_max;

        $saved=$service->update();

        if ($saved) {
            session()->flash('seccess', 'Votre service a été modifier avec success!');
            return redirect()->route('admin.service.list');

        }else{
            session()->flash('error', "Votre service n'a pas été modifier réessayer!");
            return back();
        }

    }

    public function adminServiceDelete(Request $request){
        $service=Service::findOrFail($request->id);

        $service->delete();
        return back();
    }




    public function adminCategoryAdd(Request $request){

        return view('admin.pages.category.index');
    }

    public function adminCategoryStore(Request $request){
        $request->validate([
            'icone'=>'required',
            'name'=>'required',
            'description'=>'required',

        ],[
            'name.required'=>'Entrer le nom de la catégorie',
            'icone.required'=>'Entrer icone de la categorie',
            'description.required'=>'Entrer une cescription de la catégorie'
        ]);

        $categories=Category::create([
            'name'=>$request->name,
            'icone'=>$request->icone,
            'description'=>$request->description,

        ]);

        if ($categories) {
            return redirect()->route('admin.category.list');
        }else{
            return back();
        }
    }

    public function adminCategoryList(Request $request){
        $categories=Category::get();
        return view('admin.pages.category.show', compact('categories'));
    }

    public function adminCategoryEdit(Request $request){
        $categories=Category::where('id', $request->id)->first();

        return view('admin.pages.category.edite', compact('categories'));
    }

    public function adminCategoryUpdate(Request $request){
        $categories=Category::findOrFail($request->id);

        $categories->name= $request->name;
        $categories->description= $request->description;
        $categories->icone= $request->icone;


        $saved=$categories->update();

        if ($saved) {
            return redirect()->route('admin.category.list');
            //session()->flash('seccess', 'Votre catégories a été modifier avec success!');
        }else{
            session()->flash('error', "Votre catégories n'a pas été modifier réessayer!");
            return back();
        }

    }

    public function adminCategoryDelete(Request $request){
        $categories=Category::findOrFail($request->id);

        $categories->delete();
        return back();
    }




    public function adminclientAdd(Request $request){

        return view('admin.pages.client.index');
    }

    public function adminclientStore(Request $request){
        $request->validate([

            'name'=>'required',
            'email'=>'required',
            'description'=>'required',
            'telephone'=>'required',
            'address'=>'required',
            'image'=>'required',

        ],[
            'name.required'=>'Entrer le nom de la catégorie',
            'email.required'=>'Entrer icone de la categorie',
            'description.required'=>'Entrer une cescription de la catégorie'
        ]);

        $client=Client::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'description'=>$request->description,
            'telephone'=>$request->telephone,
            'address'=>$request->address,
            'image'=>$request->image,

        ]);

        if ($client) {
            return redirect()->route('admin.client.list');
        }else{
            return back();
        }
    }

    public function adminclientList(Request $request){
        $clients=client::get();
        return view('admin.pages.client.show', compact('clients'));
    }

    public function adminclientEdit(Request $request){
        $clients=Client::where('id', $request->id)->first();

        return view('admin.pages.client.edite', compact('clients'));
    }

    public function adminclientUpdate(Request $request){
        $clients=client::findOrFail($request->id);

        $clients->name= $request->name;
        $clients->description= $request->description;
        $clients->email= $request->email;
        $clients->telephone= $request->telephone;
        $clients->address= $request->address;
        $clients->image= $request->image;


        $saved=$clients->update();

        if ($saved) {
            return redirect()->route('admin.client.list');
            session()->flash('seccess', 'Votre client a été modifier avec success!');
        }else{
            session()->flash('error', "Votre client n'a pas été modifier réessayer!");
            return back();
        }

    }

    public function adminclientDelete(Request $request){
        $client=Client::findOrFail($request->id);

        $client->delete();
        return back();
    }



    public function adminpartnerAdd(Request $request){

        return view('admin.pages.partner.index');
    }

    public function adminpartnerStore(Request $request){
        $request->validate([

            'name'=>'required',
            'description'=>'required',
            'site_web'=>'required',
            'image'=>'required',

        ],[
            'name.required'=>'Entrer le nom du partenare',
            'description.required'=>'Entrer une description de votre partenaire',
            'site_web.required'=>'Entrer le lien du site_web du partenaire'
        ]);

        $partner=Partner::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'site_web'=>$request->site_web,
            'image'=>$request->image,

        ]);

        if ($partner) {
            return redirect()->route('admin.partner.list');
        }else{
            return back();
        }
    }

    public function adminpartnerList(Request $request){
        $partners=Partner::get();
        return view('admin.pages.partner.show', compact('partners'));
    }

    public function adminpartnerEdit(Request $request){
        $partners=Partner::where('id', $request->id)->first();

        return view('admin.pages.partner.edite', compact('partners'));
    }

    public function adminpartnerUpdate(Request $request){
        $partners=Partner::findOrFail($request->id);

        $partners->name= $request->name;
        $partners->description= $request->description;
        $partners->site_web= $request->site_web;
        $partners->image= $request->image;


        $saved=$partners->update();

        if ($saved) {
            return redirect()->route('admin.partner.list');
            session()->flash('seccess', 'Votre partner a été modifier avec success!');
        }else{
            session()->flash('error', "Votre partner n'a pas été modifier réessayer!");
            return back();
        }

    }

    public function adminpartnerDelete(Request $request){
        $partner=Partner::findOrFail($request->id);

        $partner->delete();
        return back();
    }

    
}
