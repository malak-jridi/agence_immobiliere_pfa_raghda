<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Auth;
use App\Annonce;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
      
    public function index()
    {
        $annonces = Annonce::latest()->paginate(5);
        return view('annonces.index',compact('annonces'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('annonces.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $file = $request->file('image');
        // dd($file); die;
        $request->validate([
            'name_bien'=> 'required',
            'caracterestique'=> 'required',
            'Description'=> 'required',
            'image'=> 'required',
            'price'=> 'required5',
            'date_an'=> 'required',
            'type_an'=> 'required',
            'catégorie'=> 'required',
            'visualisation'=> 'required',
            'id_prop'=> 'required',
        ]);

            $file = $request->file('image');

                if($file)
                {
                    
                    $extension = $file->getClientOriginalExtension();

                    $image = time().'.' .$extension;

                    $file -> move('/images' , $image);


                    $annonce = new Annonce([
                    'name_bien' => $request->get('name_bien'),
                    'caracterestique' => $request->get('caracterestique'),
                    'Description' => $request->get('Description'),
                    'price' => $request->get('price'),
                    'image' => $image,
                    'date_an' => $request->get('date_an'),
                    'type_an' => $request->get('type_an'),
                    'catégorie' => $request->get('catégorie'),
                    'visualisation' => $request->get('visualisation'),
                    'id_prop' => $request->get('id_prop'),



                ]);

                 $annonce->save();

                 if($annonce){
                    return redirect('/annonces')->with('success', 'Congrats Annonce Saved Successfully!');
                 }
            }

                 return redirect('/annonces')->with('error', 'Opps! Annonce Fail to Create!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Annonce  $Product
     * @return \Illuminate\Http\Response
     */
    public function show($id_ann)
    {
        $Annonce = Annonce::find($id_ann);

        return view('annonces.show', compact('Annonce'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Annonce  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id_ann)
    {
        $Annonce = Annonce::find($id_ann);

        return view('Annonces.edit', compact('Annonce'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Annonce  $Product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_ann)
    {
        $request->validate([
            'name_bien'=> 'required',
            'caracterestique'=> 'required|',
            'Description'=> 'required',
            'price'=> 'required|',
            'date_an'=> 'required',
            'type_an'=> 'required',
            'catégorie'=> 'required',
            'visualisation'=> 'required',
            'id_prop'=> 'required|max:255',
            
            // 'product_description'=> 'required|max:255',
            // 'product_image'=> 'required'
        ]);
        $annonce->update($request->all());
        $input = $request->all();
        $file = $request->file('image');
        // dd($input); die;

                if($file)
                {
                    
                    $extension = $file->getClientOriginalExtension();

                    $image = time().'.' .$extension;

                    $file -> move('/images' , $image);

                    $Annonce = array(
                    'name_bien' => $request->get('name_bien'),
                    'caracterestique' => $request->get('caracterestique'),
                    'Description' => $request->get('Description'),
                    'price' => $request->get('price'),
                    'image' => $image,
                    'date_an' => $request->get('date_an'),
                    'type_an' => $request->get('type_an'),
                    'catégorie' => $request->get('catégorie'),
                    'visualisation' => $request->get('catégorie'),
                    'id_prop' => $request->get('id_prop'),

                    );

                        
                    Annonce::findOrfail($id_ann)->update($Annonce);

                   
                }

                    return redirect('/annonces')->with('success', 'Congrats Annonce Updated Successfully!');
            }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Annonce  $Product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_ann)
    {
        $Annonce = Annonce::find($id_ann);
        $Annonce->delete();

        return redirect()->route('annonces.index')->with('success', 'Congrats Annonce Deleted Successfully!');
    }
}