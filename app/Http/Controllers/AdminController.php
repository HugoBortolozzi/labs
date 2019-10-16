<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Template;

use App\Testimonial;

class AdminController extends Controller
{
    public function testimonials(){
        $testimonials = Testimonial::all();

        return view ('admin/testimonials',compact('testimonials'));
    }

    public function deleteTestimonial($id){
        $testimonial = Testimonial::find($id);

        $testimonial->delete();

        $messageTestimonial = $testimonial ? "Témoignage supprimée" : "Erreur lors de la suppression du témoignage";
        session()->flash('messageTestimonial',$messageTestimonial);

        return redirect()->route('adminTestimonials');
    }
    public function editTestimonial($id){
        $testimonial = Testimonial::find($id);

        return view ('admin/crud/editTestimonial',compact('testimonial'));
    }
    public function updateTestimonial($id){
        $testimonial = Testimonial::find($id);

        $testimonial->name = request()->input('testimonial_name');
        $testimonial->photo = request()->input('testimonial_photo');
        $testimonial->text = request()->input('testimonial_text');
        $testimonial->post = request()->input('testimonial_post');

        $testimonial->save();

        $messageTestimonial = $testimonial ? "Témoignage mis à jour" : "Erreur lors de la modification du témoignage";
        session()->flash('messageTestimonial',$messageTestimonial);

        return redirect()->route('adminTestimonials');
    }
}
