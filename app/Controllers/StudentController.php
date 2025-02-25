<?php

namespace App\Controllers;

use App\Models\StudentModel;
use CodeIgniter\Controller;

class StudentController extends Controller
{
    public function create()
    {
        return view('admission_form');
    }

    public function store()
    {
        try{

        
        helper(['form', 'url']);
        $studentModel = new StudentModel();

        $fileImage = $this->request->getFile('image');
        $fileDoc = $this->request->getFile('document');

        if ($fileImage && $fileImage->isValid() &&  !$fileImage->hasMoved()) {
            $imageName = $fileImage->getRandomName();
            $fileImage->move('uploads/', $imageName);
        } else {
            $imageName = null;
        }

        if ($fileDoc && $fileDoc->isValid()  && !$fileDoc->hasMoved()) {
            $docName = $fileDoc->getRandomName();
            $fileDoc->move('uploads/', $docName);
        } else {
            $docName = null;
        }

        $studentModel->save([
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'father_name' => $this->request->getPost('father_name'),
            'mother_name' => $this->request->getPost('mother_name'),
            'dob' => $this->request->getPost('dob'),
            'image' => $imageName,
            'document' => $docName,
        ]);
    

        return redirect()->to('/');
    }
    catch(\Exception $e) {
        log_message('error', $e->getMessage());
        return redirect()->back()->with('error', 'Something went wrong: ' . $e->getMessage());
   }
}



// namespace App\Controllers;

// use App\Models\StudentModel;
// use CodeIgniter\Controller;

// class StudentController extends Controller
// {
//     public function create()
//     {
//         return view('admission_form');
//     }

//     public function store()
//     {
//         try {
//             helper(['form', 'url']);
//             $studentModel = new StudentModel();

//             $fileImage = $this->request->getFile('image');
//             $fileDoc = $this->request->getFile('document');

//             // Handling Image Upload
//             if ($fileImage && $fileImage->isValid() && !$fileImage->hasMoved()) {
//                 $imageName = $fileImage->getRandomName();
//                 $fileImage->move('uploads/', $imageName);
//             } else {
//                 $imageName = null;
//             }

//             // Handling Document Upload
//             if ($fileDoc && $fileDoc->isValid() && !$fileDoc->hasMoved()) {
//                 $docName = $fileDoc->getRandomName();
//                 $fileDoc->move('uploads/', $docName);
//             } else {
//                 $docName = null;
//             }

//             // Save to Database
//             $studentData = [
//                 'name'        => $this->request->getPost('name'),
//                 'email'       => $this->request->getPost('email'),
//                 'phone'       => $this->request->getPost('phone'),
//                 'father_name' => $this->request->getPost('father_name'),
//                 'mother_name' => $this->request->getPost('mother_name'),
//                 'dob'         => $this->request->getPost('dob'),
//                 'image'       => $imageName,
//                 'document'    => $docName,
//             ];

//             $insertId = $studentModel->insert($studentData);

//             if ($insertId) {
//                 return redirect()->to(base_url("students/print/$insertId"));
//             } else {
//                 return redirect()->back()->with('error', 'Data submission failed.');
//             }
//         } catch (\Exception $e) {
//             log_message('error', $e->getMessage());
//             return redirect()->back()->with('error', 'Something went wrong: ' . $e->getMessage());
//         }
//     }

//     // Print Page Functionality
//     public function printForm($id)
//     {
//         $studentModel = new StudentModel();
//         $data['student'] = $studentModel->find($id);

//         if (!$data['student']) {
//             return redirect()->to('/')->with('error', 'Student not found.');
//         }

//         return view('print_form', $data);
//     }
}

