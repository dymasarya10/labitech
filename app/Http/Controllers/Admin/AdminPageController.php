<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function contact()
    {
        $page_data = Page::where('id', 1)->first();
        return view('admin.page_contact', compact('page_data'));
    }

    public function contact_data(Request $request)
    {
        $obj = Page::where('id', 1)->first();
        $obj->contact_heading = $request->contact_heading;
        $obj->contact_map = $request->contact_map;
        $obj->contact_status = $request->contact_status;
        $obj->update();

        return redirect()->back()->with('success', 'Contact Page is update Successfully !!');
    }

    public function contact_update(Request $request)
    {
        $obj = Page::where('id', 1)->first();
        $obj->contact_heading = $request->contact_heading;
        $obj->contact_map = $request->contact_map;
        $obj->contact_status = $request->contact_status;
        $obj->update();

        return redirect()->back()->with('success', 'Contact Page is updated successfully.');
    }

    public function faq()
    {
        $page_data = Page::where('id', 1)->first();
        return view('admin.page_faq', compact('page_data'));
    }

    public function faq_update(Request $request)
    {
        $obj = Page::where('id', 1)->first();
        $obj->faq_heading = $request->faq_heading;
        $obj->faq_status = $request->faq_status;
        $obj->update();

        return redirect()->back()->with('success', 'FAQ Page is updated successfully.');
    }

    public function blog()
    {
        $page_data = Page::where('id', 1)->first();
        return view('admin.page_blog', compact('page_data'));
    }

    public function blog_update(Request $request)
    {
        $obj = Page::where('id', 1)->first();
        $obj->blog_heading = $request->blog_heading;
        $obj->blog_status = $request->blog_status;
        $obj->update();

        return redirect()->back()->with('success', 'Blog Page is updated successfully.');
    }
}
