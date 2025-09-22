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
use App\Models\Gallery;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{
    public function admin(Request $request)
    {
        return view('admin.pages.home.index');
    }

     /* public function adminBlog(Request $request)
    {
        
        // code to get blog
        return view('admin.pages.blog.index');
    }  */



    public function adminAboutEdit(Request $request)
    {
        $data=About::first();
        return view('admin.pages.about.edit', compact('data'));
    }

    public function adminUpdate(Request $request){
        // Validation des données
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        $about = About::first(); // ou About::find($id) si tu utilises un ID

        if (!$about) {
            return back()->with('error', 'Contenu introuvable.');
        }

        $about->title = $request->title;
        $about->description = $request->description;

        // Gestion de l’image uploadée (si présente)
        if ($request->hasFile('image')) {
            // Supprimer l’ancienne image si elle existe
            if ($about->image && Storage::disk('public')->exists($about->image)) {
                Storage::disk('public')->delete($about->image);
            }

            // Sauvegarder la nouvelle image
            $imagePath = $request->file('image')->store('uploads/about', 'public');
            $about->image = $imagePath;
        }

        if ($about->save()) {
            return back()->with('success', 'Modification effectuée avec succès !');
        } else {
            return back()->with('error', 'Une erreur est survenue lors de la modification.');
        }
    }

    // Afficher les détails d’un blog
public function adminBlogDetails($id)
{
    $blog = Blog::findOrFail($id);
    return view('admin.pages.blog.show', compact('blog'));
}

// Formulaire d’édition
public function adminBlogEdit($id)
{
    $blog = Blog::findOrFail($id);
    return view('admin.pages.blog.edit', compact('blog'));
}

// Mise à jour
public function adminBlogUpdate(Request $request, $id)
{
    $blog = Blog::findOrFail($id);

    $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'slug' => 'required|string|unique:blogs,slug,' . $id,
        'user_id' => 'required|exists:users,id',
        'category_id' => 'required|exists:categories,id',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
    ], [
        'image.image' => "Le fichier doit être une image.",
        'image.mimes' => "Les formats autorisés sont : jpeg, png, jpg, gif.",
        'image.max' => "L'image ne doit pas dépasser 2 Mo.",
    ]);

    $data = $request->only(['title','content','slug','user_id','category_id']);

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('uploads/blog', 'public');
    }

    $blog->update($data);

    return redirect()->route('admin.blog')->with('success', 'Article mis à jour avec succès.');
}

// Liste des blogs
public function adminBlog()
{
    $blogs = Blog::latest()->get();
    $categories= Category::all();
    $data=[
        'blogs'=>$blogs,
        'categories'=>$categories,
    ];
    return view('admin.pages.blog.index', $data);
}

// Formulaire d’ajout
public function adminBlogIndex()
{
    $categories= Category::all();
    $data=[
        
        'categories'=>$categories,
    ];
    return view('admin.pages.blog.add', $data);
}

// Stockage nouvel article
/* public function adminBlogStore(Request $request)
{
    
    $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required',
        'slug' => 'required|string|unique:blogs,slug',
        'user_id' => 'required|exists:users,id',
        'category_id' => 'required|exists:categories,id',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif',
    ]);

    $imagePath = $request->file('image')->store('uploads/blog', 'public');

    Blog::create([
    'title'       => $request->title,
    'content'     => $request->content,
    'slug'        => $slug,
    'user_id'     => $request->user_id,
    'category_id' => $request->category_id,
    'image'       => $imagePath,
]);

    return redirect()->route('admin.blog')->with('success','Article ajouté avec succès.');
} */
public function adminBlogStore(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'content'     => 'required',
            'slug'        => 'required|string|unique:blogs,slug',
            'user_id'     => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id',
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Upload image
        $imagePath = $request->file('image')->store('uploads/blog', 'public');

        // Définir le slug (celui soumis par l’admin)
        $slug = $request->slug;

        Blog::create([
            'title'       => $request->title,
            'content'     => $request->content,
            'slug'        => $slug,
            'user_id'     => $request->user_id,
            'category_id' => $request->category_id,
            'image'       => $imagePath,
        ]);

        return redirect()
            ->route('admin.blog')
            ->with('success', 'Article ajouté avec succès.');
    }

// Suppression
public function adminBlogDelete($id)
{
    $blog = Blog::findOrFail($id);
    $blog->delete();
    return back()->with('success', 'Article supprimé avec succès.');
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

    

    public function adminLoginStore(Request $request)
    {
        // Validation
        $request->validate([
            'email'    => 'required|email|exists:users,email',
            'password' => 'required|min:6',
        ], [
            'email.required'    => 'Veuillez entrer votre adresse email',
            'email.email'       => 'Votre email n\'est pas valide',
            'email.exists'      => 'Cet email n\'existe pas dans nos enregistrements',
            'password.required' => 'Veuillez entrer un mot de passe',
            'password.min'      => 'Le mot de passe doit contenir au moins 6 caractères',
        ]);

        // Tentative d'authentification
        $credentials = $request->only('email', 'password');
        $remember    = $request->has('remember'); // support "se souvenir de moi"

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            return redirect()
                ->route('admin.index')
                ->with('success', 'Connexion réussie !');
        }

        // Si échec
        return back()
            ->withInput($request->only('email'))
            ->with('fail', 'Erreur de connexion. Veuillez réessayer.');
    }


    public function logout(){
        Auth::logout();

        return to_route('login')->with('vous êtes deconnecté');
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

    public function adminServiceStore(Request $request)
{
    //  Validation
    $request->validate([
        'title' => 'required|string|max:255',
        'short' => 'required|string',
        'description' => 'nullable|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        //'icone' => 'nullable|string',
    ], [
        'title.required' => 'Le titre est requis.',
        'short.required' => 'Le résumé est requis.',
        'image.required' => 'L\'image est requise.',
        'image.image' => 'Le fichier doit être une image valide.',
    ]);

     
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('uploads/service', 'public');
    } else {
        return back()->withErrors(['image' => 'L\'image est requise.']);
    }

    
    $service = Service::create([
        'title' => $request->title,
        'short' => $request->short,
        'description' => $request->description,
        'image' => $imagePath,
        'icone' => $request->icone,
    ]);

   
    if ($service) {
        return redirect()->route('admin.service.list')->with('success', 'Service créé avec succès.');
    } else {
        return back()->with('error', 'Une erreur est survenue.');
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

 

    public function adminServiceUpdate(Request $request)
    {
        // Validation
        $request->validate([
            'title' => 'required|string|max:255',
            'short' => 'required|string',
            'description' => 'nullable|string',
            'prix_min' => 'nullable|numeric',
            'prix_max' => 'nullable|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,svg,gif',
        ], [
            'title.required' => 'Le titre est requis.',
            'short.required' => 'Le résumé est requis.',
            'prix_min.numeric' => 'Le prix minimum doit être un nombre.',
            'prix_max.numeric' => 'Le prix maximum doit être un nombre.',
            'image.image' => 'Le fichier doit être une image.',
            'image.mimes' => 'Formats autorisés : jpeg, png, jpg, svg, gif.',
        ]);

        // Récupération du service
        $service = Service::findOrFail($request->id);

        // Image update
        if ($request->hasFile('image')) {
            // Supprimer l’ancienne image si elle existe
            if ($service->image && Storage::disk('public')->exists($service->image)) {
                Storage::disk('public')->delete($service->image);
            }

            // Stocker la nouvelle image
            $imagePath = $request->file('image')->store('uploads/service', 'public');
            $service->image = $imagePath;
        }

        // Autres champs
        $service->title = $request->title;
        $service->short = $request->short;
        $service->description = $request->description;
        $service->prix_min = $request->prix_min;
        $service->prix_max = $request->prix_max;

        // Enregistrement
        if ($service->save()) {
                session()->flash('notify', ['type' => 'success', 'message' => 'Service modifié avec succès.']);
                return redirect()->route('admin.service.list');
            } else {
                session()->flash('notify', ['type' => 'danger', 'message' => 'Erreur lors de la modification.']);
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

    

    public function adminclientStore(Request $request)
    {
        // 1. Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'description' => 'required|string',
            'telephone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        ], [
            'name.required' => 'Entrer le nom du client',
            'email.required' => 'Entrer un email valide',
            'description.required' => 'Entrer une description du client',
            'telephone.required' => 'Entrer un numéro de téléphone',
            'address.required' => 'Entrer l\'adresse du client',
            'image.required' => 'Sélectionner une image',
        ]);

        // 2. Enregistrement de l’image
        $imagePath = $request->file('image')->store('uploads/clients', 'public');

        // 3. Création du client
        $client = Client::create([
            'name' => $request->name,
            'email' => $request->email,
            'description' => $request->description,
            'telephone' => $request->telephone,
            'address' => $request->address,
            'image' => $imagePath,
        ]);

        // 4. Retour
        if ($client) {
            session()->flash('success', 'Client ajouté avec succès.');
            return redirect()->route('admin.client.list');
        } else {
            session()->flash('error', 'Erreur lors de l\'ajout du client.');
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

    

    public function adminclientUpdate(Request $request)
    {
        // 1. Validation
        $request->validate([
            
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'email' => 'required|email|max:255',
            'telephone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,svg',
        ]);

        // 2. Récupération du client
        $client = Client::findOrFail($request->id);

        // 3. Gestion de l’image si nouvelle image envoyée
        if ($request->hasFile('image')) {
            // Supprimer l’ancienne image si elle existe
            if ($client->image && Storage::disk('public')->exists($client->image)) {
                Storage::disk('public')->delete($client->image);
            }

            // Enregistrer la nouvelle image
            $imagePath = $request->file('image')->store('uploads/clients', 'public');
            $client->image = $imagePath;
        }

        // 4. Mise à jour des autres champs
        $client->name = $request->name;
        $client->description = $request->description;
        $client->email = $request->email;
        $client->telephone = $request->telephone;
        $client->address = $request->address;

        // 5. Sauvegarde
        if ($client->save()) {
            session()->flash('success', 'Le client a été modifié avec succès.');
            return redirect()->route('admin.client.list');
        } else {
            session()->flash('error', 'Le client n\'a pas pu être modifié. Veuillez réessayer.');
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


    //gallery
    public function adminGalleryAdd(Request $request){

        return view('admin.pages.gallery.index');
    }

    public function adminGalleryStore(Request $request){
        // Validation des données
        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:1000',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg', // max 2 Mo
        ]);

        // Upload de l'image
        $imagePath = $request->file('image')->store('uploads/gallery', 'public');

        // Création du nouvel enregistrement
        $gallery = Gallery::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        // Redirection avec message
        if ($gallery) {
            return redirect()->route('admin.gallery.list')->with('success', 'Image ajoutée avec succès.');
        } else {
            return back()->with('error', 'Une erreur est survenue, veuillez réessayer.');
        }
    }


    public function adminGalleryList(Request $request){
        $gallery=Gallery::get();
        return view('admin.pages.gallery.show', compact('gallery'));
    }

    public function adminGalleryEdit(Request $request){
        $gallery=Gallery::where('id', $request->id)->first();

        return view('admin.pages.gallery.edite', compact('gallery'));
    }

    

    public function adminGalleryUpdate(Request $request){
        $gallery = Gallery::findOrFail($request->id);

        // Validation des champs
        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:1000',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $gallery->title = $request->title;
        $gallery->description = $request->description;

        // Si une nouvelle image est soumise
        if ($request->hasFile('image')) {
            // Supprimer l’ancienne image si elle existe
            if ($gallery->image && Storage::disk('public')->exists($gallery->image)) {
                Storage::disk('public')->delete($gallery->image);
            }

            // Stocker la nouvelle image
            $imagePath = $request->file('image')->store('uploads/gallery', 'public');
            $gallery->image = $imagePath;
        }

        $saved = $gallery->save();

        if ($saved) {
            session()->flash('success', 'Votre galerie a été modifiée avec succès !');
            return redirect()->route('admin.gallery.list');
        } else {
            session()->flash('error', "Échec de la modification, veuillez réessayer !");
            return back();
        }
    }


    public function adminGalleryDelete(Request $request){
        $gallery=Gallery::findOrFail($request->id);

        $gallery->delete();
        return back();
    }

    // contact

    public function adminContactList(){
        $contact= Contact::get();

        $data=[
            'contact'=> $contact
        ];
        return view('admin.pages.contact.show', $data);

    }

    public function adminContactEdit(Request $request){
        $contact=Contact::where('id', $request->id)->first();

        return view('admin.pages.contact.edite', compact('contact'));
    }

    public function adminContactUpdate(Request $request)
{
    $contact = Contact::findOrFail($request->id);

    $contact->name = $request->name;
    $contact->message = $request->message;
    $contact->email = $request->email;

    $saved = $contact->save();

    if ($saved) {
        session()->flash('success', 'Votre contact a été modifié avec succès !');
        return redirect()->route('admin.contact.list');
    } else {
        session()->flash('error', "Votre contact n'a pas été modifié, veuillez réessayer !");
        return back();
    }
}


    public function adminContactDelete(Request $request){
        $contact=Contact::findOrFail($request->id);
    //dd($contact);

        $contact->delete();
        return back();
    }


}
