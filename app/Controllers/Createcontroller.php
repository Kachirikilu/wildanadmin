<?php

namespace App\Controllers;

class CreateController extends BaseController {

    protected $createAdmin;
    public function __construct() {
        $this->createAdmin = new \App\Models\CreateModels();
    }

    public function save() {

         if (!$this->validate([
            'inputTitle' => [
                'rules' => 'required|is_unique[home.Judul]',
                'errors' => [
                    'required' => 'Title is required!',
                    'is_unique' => 'Title already exists!'
                ]
            ],
            'inputPicture' => [
                'rules' => 'max_size[inputPicture,51200]|is_image[inputPicture]|mime_in[inputPicture,image/jpg,image/jpeg,image/png,image/dng,image/gif,image/heif,image/heic,image/tif,image/tiff,image/svg]',
                'errors' => [
                    'max_size' => 'Maximum photo file size is 50 MB!',
                    'is_image' => 'File format not supported!',
                    'mime_in' => 'File format not supported!'
                ]
            ],
            'inputP1' => [
                'rules' => 'max_size[inputP1,51200]|is_image[inputP1]|mime_in[inputP1,image/jpg,image/jpeg,image/png,image/dng,image/gif,image/heif,image/heic,image/tif,image/tiff,image/svg]',
                'errors' => [
                    'max_size' => 'Maximum photo file size is 50 MB!',
                    'is_image' => 'File format not supported!',
                    'mime_in' => 'File format not supported!'
                ]
            ],
            'inputP2' => [
                'rules' => 'max_size[inputP2,51200]|is_image[inputP2]|mime_in[inputP2,image/jpg,image/jpeg,image/png,image/dng,image/gif,image/heif,image/heic,image/tif,image/tiff,image/svg]',
                'errors' => [
                    'max_size' => 'Maximum photo file size is 50 MB!',
                    'is_image' => 'File format not supported!',
                    'mime_in' => 'File format not supported!'
                ]
            ],
            'inputP3' => [
                'rules' => 'max_size[inputP3,51200]|is_image[inputP3]|mime_in[inputP3,image/jpg,image/jpeg,image/png,image/dng,image/gif,image/heif,image/heic,image/tif,image/tiff,image/svg]',
                'errors' => [
                    'max_size' => 'Maximum photo file size is 50 MB!',
                    'is_image' => 'File format not supported!',
                    'mime_in' => 'File format not supported!'
                ]
            ],
            'inputP4' => [
                'rules' => 'max_size[inputP4,51200]|is_image[inputP4]|mime_in[inputP4,image/jpg,image/jpeg,image/png,image/dng,image/gif,image/heif,image/heic,image/tif,image/tiff,image/svg]',
                'errors' => [
                    'max_size' => 'Maximum photo file size is 50 MB!',
                    'is_image' => 'File format not supported!',
                    'mime_in' => 'File format not supported!'
                ]
            ],
            'inputP5' => [
                'rules' => 'max_size[inputP5,51200]|is_image[inputP5]|mime_in[inputP5,image/jpg,image/jpeg,image/png,image/dng,image/gif,image/heif,image/heic,image/tif,image/tiff,image/svg]',
                'errors' => [
                    'max_size' => 'Maximum photo file size is 50 MB!',
                    'is_image' => 'File format not supported!',
                    'mime_in' => 'File format not supported!'
                ]
            ],
            'inputP6' => [
                'rules' => 'max_size[inputP6,51200]|is_image[inputP6]|mime_in[inputP6,image/jpg,image/jpeg,image/png,image/dng,image/gif,image/heif,image/heic,image/tif,image/tiff,image/svg]',
                'errors' => [
                    'max_size' => 'Maximum photo file size is 50 MB!',
                    'is_image' => 'File format not supported!',
                    'mime_in' => 'File format not supported!'
                ]
            ],
            'inputP7' => [
                'rules' => 'max_size[inputP7,51200]|is_image[inputP7]|mime_in[inputP7,image/jpg,image/jpeg,image/png,image/dng,image/gif,image/heif,image/heic,image/tif,image/tiff,image/svg]',
                'errors' => [
                    'max_size' => 'Maximum photo file size is 50 MB!',
                    'is_image' => 'File format not supported!',
                    'mime_in' => 'File format not supported!'
                ]
            ],
            'inputP8' => [
                'rules' => 'max_size[inputP8,51200]|is_image[inputP8]|mime_in[inputP8,image/jpg,image/jpeg,image/png,image/dng,image/gif,image/heif,image/heic,image/tif,image/tiff,image/svg]',
                'errors' => [
                    'max_size' => 'Maximum photo file size is 50 MB!',
                    'is_image' => 'File format not supported!',
                    'mime_in' => 'File format not supported!'
                ]
            ],
            'inputP9' => [
                'rules' => 'max_size[inputP9,51200]|is_image[inputP9]|mime_in[inputP9,image/jpg,image/jpeg,image/png,image/dng,image/gif,image/heif,image/heic,image/tif,image/tiff,image/svg]',
                'errors' => [
                    'max_size' => 'Maximum photo file size is 50 MB!',
                    'is_image' => 'File format not supported!',
                    'mime_in' => 'File format not supported!'
                ]
            ],
            'inputP10' => [
                'rules' => 'max_size[inputP10,51200]|is_image[inputP10]|mime_in[inputP10,image/jpg,image/jpeg,image/png,image/dng,image/gif,image/heif,image/heic,image/tif,image/tiff,image/svg]',
                'errors' => [
                    'max_size' => 'Maximum photo file size is 50 MB!',
                    'is_image' => 'File format not supported!',
                    'mime_in' => 'File format not supported!'
                ]
            ],
            'inputP11' => [
                'rules' => 'max_size[inputP11,51200]|is_image[inputP11]|mime_in[inputP11,image/jpg,image/jpeg,image/png,image/dng,image/gif,image/heif,image/heic,image/tif,image/tiff,image/svg]',
                'errors' => [
                    'max_size' => 'Maximum photo file size is 50 MB!',
                    'is_image' => 'File format not supported!',
                    'mime_in' => 'File format not supported!'
                ]
            ],
            'inputP12' => [
                'rules' => 'max_size[inputP12,51200]|is_image[inputP12]|mime_in[inputP12,image/jpg,image/jpeg,image/png,image/dng,image/gif,image/heif,image/heic,image/tif,image/tiff,image/svg]',
                'errors' => [
                    'max_size' => 'Maximum photo file size is 50 MB!',
                    'is_image' => 'File format not supported!',
                    'mime_in' => 'File format not supported!'
                ]
            ]
        ])) {
            return redirect()->to('create_article')->withInput();
        }

        $slug = url_title($this->request->getVar('inputTitle'), '_', true);
        $date = $this->request->getVar('inputDateSlug');

        $picture = $this->request->getFile('inputPicture');
        if ($picture->getError() == 4) {
            $picturename = 'No Image.png';
        } else {
            $outputPicture = $this->request->getFile('inputPicture');
            $picturename = $picture->getRandomName();
            $outputPicture->move('ArticlePicture/', $picturename);
        }

        $picture1 = $this->request->getFile('inputP1');
        if ($picture1->getError() == 4) {
            $inputP1 = '';
        } else {
            $outputPicture = $this->request->getFile('inputP1');
            $inputP1 = $outputPicture->getRandomName();
            $outputPicture->move('ArticlePicture/', $inputP1);
        }

        $picture2 = $this->request->getFile('inputP2');
        if ($picture2->getError() == 4) {
            $inputP2 = '';
        } else {
            $outputPicture = $this->request->getFile('inputP2');
            $inputP2 = $outputPicture->getRandomName();
            $outputPicture->move('ArticlePicture/', $inputP2);
        }

        $picture3 = $this->request->getFile('inputP3');
        if ($picture3->getError() == 4) {
            $inputP3 = '';
        } else {
            $outputPicture = $this->request->getFile('inputP3');
            $inputP3 = $outputPicture->getRandomName();
            $outputPicture->move('ArticlePicture/', $inputP3);
        }

        $picture4 = $this->request->getFile('inputP4');
        if ($picture4->getError() == 4) {
            $inputP4 = '';
        } else {
            $outputPicture = $this->request->getFile('inputP4');
            $inputP4 = $outputPicture->getRandomName();
            $outputPicture->move('ArticlePicture/', $inputP4);
        }

        $picture5 = $this->request->getFile('inputP5');
        if ($picture5->getError() == 4) {
            $inputP5 = '';
        } else {
            $outputPicture = $this->request->getFile('inputP5');
            $inputP5 = $outputPicture->getRandomName();
            $outputPicture->move('ArticlePicture/', $inputP5);
        }

        $picture6 = $this->request->getFile('inputP6');
        if ($picture6->getError() == 4) {
            $inputP6 = '';
        } else {
            $outputPicture = $this->request->getFile('inputP6');
            $inputP6 = $outputPicture->getRandomName();
            $outputPicture->move('ArticlePicture/', $inputP6);
        }

        $picture7 = $this->request->getFile('inputP7');
        if ($picture7->getError() == 4) {
            $inputP7 = '';
        } else {
            $outputPicture = $this->request->getFile('inputP7');
            $inputP7 = $outputPicture->getRandomName();
            $outputPicture->move('ArticlePicture/', $inputP7);
        }

        $picture8 = $this->request->getFile('inputP8');
        if ($picture8->getError() == 4) {
            $inputP8 = '';
        } else {
            $outputPicture = $this->request->getFile('inputP8');
            $inputP8 = $outputPicture->getRandomName();
            $outputPicture->move('ArticlePicture/', $inputP8);
        }

        $picture9 = $this->request->getFile('inputP9');
        if ($picture9->getError() == 4) {
            $inputP9 = '';
        } else {
            $outputPicture = $this->request->getFile('inputP9');
            $inputP9 = $outputPicture->getRandomName();
            $outputPicture->move('ArticlePicture/', $inputP9);
        }

        $picture10 = $this->request->getFile('inputP10');
        if ($picture10->getError() == 4) {
            $inputP10 = '';
        } else {
            $outputPicture = $this->request->getFile('inputP10');
            $inputP10 = $outputPicture->getRandomName();
            $outputPicture->move('ArticlePicture/', $inputP10);
        }

        $picture11 = $this->request->getFile('inputP11');
        if ($picture11->getError() == 4) {
            $inputP11 = '';
        } else {
            $outputPicture = $this->request->getFile('inputP11');
            $inputP11 = $outputPicture->getRandomName();
            $outputPicture->move('ArticlePicture/', $inputP11);
        }

        $picture12 = $this->request->getFile('inputP12');
        if ($picture12->getError() == 4) {
            $inputP12 = '';
        } else {
            $outputPicture = $this->request->getFile('inputP12');
            $inputP12 = $outputPicture->getRandomName();
            $outputPicture->move('ArticlePicture/', $inputP12);
        }

        $writer = $this->request->getVar('inputWriter');
        if (session()->get('Pangkat') == "CEO") {
            $penulis = $writer;
        } else {
            if ($writer !== "Wildan Athif Muttaqien") {
                $penulis = $writer;
            } else {
                $penulis = session()->get('Name');
            }
        }





        $infoCoding1 = $this->request->getVar('inputInfoCoding1');
        if ($infoCoding1 == "html runcode") {
            $Coding1 = $this->request->getVar('inputCoding1');
            $Coding1CSS = $this->request->getVar('inputCoding1CSS');
            $Coding1JS = $this->request->getVar('inputCoding1JS');
        } else if ($infoCoding1 !== "html runcode" || $infoCoding1 !== "none") {
            $Coding1 = $this->request->getVar('inputCoding1');
            $Coding1CSS = "";
            $Coding1JS = "";
        } else {
            $Coding1 = "";
            $Coding1CSS = "";
            $Coding1JS = "";
        }

        $infoCoding2 = $this->request->getVar('inputInfoCoding2');
        if ($infoCoding2 == "html runcode") {
            $Coding2 = $this->request->getVar('inputCoding2');
            $Coding2CSS = $this->request->getVar('inputCoding2CSS');
            $Coding2JS = $this->request->getVar('inputCoding2JS');
        } else if ($infoCoding2 !== "html runcode" || $infoCoding2 !== "none") {
            $Coding2 = $this->request->getVar('inputCoding2');
            $Coding2CSS = "";
            $Coding2JS = "";
        } else {
            $Coding2 = "";
            $Coding2CSS = "";
            $Coding2JS = "";
        }

        $infoCoding3 = $this->request->getVar('inputInfoCoding3');
        if ($infoCoding3 == "html runcode") {
            $Coding3 = $this->request->getVar('inputCoding3');
            $Coding3CSS = $this->request->getVar('inputCoding3CSS');
            $Coding3JS = $this->request->getVar('inputCoding3JS');
        } else if ($infoCoding3 !== "html runcode" || $infoCoding3 !== "none") {
            $Coding3 = $this->request->getVar('inputCoding3');
            $Coding3CSS = "";
            $Coding3JS = "";
        } else {
            $Coding3 = "";
            $Coding3CSS = "";
            $Coding3JS = "";
        }

        $infoCoding4 = $this->request->getVar('inputInfoCoding4');
        if ($infoCoding4 == "html runcode") {
            $Coding4 = $this->request->getVar('inputCoding4');
            $Coding4CSS = $this->request->getVar('inputCoding4CSS');
            $Coding4JS = $this->request->getVar('inputCoding4JS');
        } else if ($infoCoding4 !== "html runcode" || $infoCoding4 !== "none") {
            $Coding4 = $this->request->getVar('inputCoding4');
            $Coding4CSS = "";
            $Coding4JS = "";
        } else {
            $Coding4 = "";
            $Coding4CSS = "";
            $Coding4JS = "";
        }

        $infoCoding5 = $this->request->getVar('inputInfoCoding5');
        if ($infoCoding5 == "html runcode") {
            $Coding5 = $this->request->getVar('inputCoding5');
            $Coding5CSS = $this->request->getVar('inputCoding5CSS');
            $Coding5JS = $this->request->getVar('inputCoding5JS');
        } else if ($infoCoding5 !== "html runcode" || $infoCoding5 !== "none") {
            $Coding5 = $this->request->getVar('inputCoding5');
            $Coding5CSS = "";
            $Coding5JS = "";
        } else {
            $Coding5 = "";
            $Coding5CSS = "";
            $Coding5JS = "";
        }

        $infoCoding6 = $this->request->getVar('inputInfoCoding6');
        if ($infoCoding6 == "html runcode") {
            $Coding6 = $this->request->getVar('inputCoding6');
            $Coding6CSS = $this->request->getVar('inputCoding6CSS');
            $Coding6JS = $this->request->getVar('inputCoding6JS');
        } else if ($infoCoding6 !== "html runcode" || $infoCoding6 !== "none") {
            $Coding6 = $this->request->getVar('inputCoding6');
            $Coding6CSS = "";
            $Coding6JS = "";
        } else {
            $Coding6 = "";
            $Coding6CSS = "";
            $Coding6JS = "";
        }

        $infoCoding7 = $this->request->getVar('inputInfoCoding7');
        if ($infoCoding7 == "html runcode") {
            $Coding7 = $this->request->getVar('inputCoding7');
            $Coding7CSS = $this->request->getVar('inputCoding7CSS');
            $Coding7JS = $this->request->getVar('inputCoding7JS');
        } else if ($infoCoding7 !== "html runcode" || $infoCoding7 !== "none") {
            $Coding7 = $this->request->getVar('inputCoding7');
            $Coding7CSS = "";
            $Coding7JS = "";
        } else {
            $Coding7 = "";
            $Coding7CSS = "";
            $Coding7JS = "";
        }

        $infoCoding8 = $this->request->getVar('inputInfoCoding8');
        if ($infoCoding8 == "html runcode") {
            $Coding8 = $this->request->getVar('inputCoding8');
            $Coding8CSS = $this->request->getVar('inputCoding8CSS');
            $Coding8JS = $this->request->getVar('inputCoding8JS');
        } else if ($infoCoding8 !== "html runcode" || $infoCoding8 !== "none") {
            $Coding8 = $this->request->getVar('inputCoding8');
            $Coding8CSS = "";
            $Coding8JS = "";
        } else {
            $Coding8 = "";
            $Coding8CSS = "";
            $Coding8JS = "";
        }

        $infoCoding9 = $this->request->getVar('inputInfoCoding9');
        if ($infoCoding9 == "html runcode") {
            $Coding9 = $this->request->getVar('inputCoding9');
            $Coding9CSS = $this->request->getVar('inputCoding9CSS');
            $Coding9JS = $this->request->getVar('inputCoding9JS');
        } else if ($infoCoding9 !== "html runcode" || $infoCoding9 !== "none") {
            $Coding9 = $this->request->getVar('inputCoding9');
            $Coding9CSS = "";
            $Coding9JS = "";
        } else {
            $Coding9 = "";
            $Coding9CSS = "";
            $Coding9JS = "";
        }

        $infoCoding10 = $this->request->getVar('inputInfoCoding10');
        if ($infoCoding10 == "html runcode") {
            $Coding10 = $this->request->getVar('inputCoding10');
            $Coding10CSS = $this->request->getVar('inputCoding10CSS');
            $Coding10JS = $this->request->getVar('inputCoding10JS');
        } else if ($infoCoding10 !== "html runcode" || $infoCoding10 !== "none") {
            $Coding10 = $this->request->getVar('inputCoding10');
            $Coding10CSS = "";
            $Coding10JS = "";
        } else {
            $Coding10 = "";
            $Coding10CSS = "";
            $Coding10JS = "";
        }

        $infoCoding11 = $this->request->getVar('inputInfoCoding11');
        if ($infoCoding11 == "html runcode") {
            $Coding11 = $this->request->getVar('inputCoding11');
            $Coding11CSS = $this->request->getVar('inputCoding11CSS');
            $Coding11JS = $this->request->getVar('inputCoding11JS');
        } else if ($infoCoding11 !== "html runcode" || $infoCoding11 !== "none") {
            $Coding11 = $this->request->getVar('inputCoding11');
            $Coding11CSS = "";
            $Coding11JS = "";
        } else {
            $Coding11 = "";
            $Coding11CSS = "";
            $Coding11JS = "";
        }

        $infoCoding12 = $this->request->getVar('inputInfoCoding12');
        if ($infoCoding12 == "html runcode") {
            $Coding12 = $this->request->getVar('inputCoding12');
            $Coding12CSS = $this->request->getVar('inputCoding12CSS');
            $Coding12JS = $this->request->getVar('inputCoding12JS');
        } else if ($infoCoding12 !== "html runcode" || $infoCoding12 !== "none") {
            $Coding12 = $this->request->getVar('inputCoding12');
            $Coding12CSS = "";
            $Coding12JS = "";
        } else {
            $Coding12 = "";
            $Coding12CSS = "";
            $Coding12JS = "";
        }

        $this->createAdmin->save([
            'Slug' => $slug . $date,
            'DateSlug' => $date,
            'Judul' => $this->request->getVar('inputTitle'),
            'Picture' => $picturename, 
            'Penulis' => $penulis,
            'Tanggal' => $this->request->getVar('inputDate'),
            'Paragraf1' => $this->request->getVar('inputParagraf1'),
            'Paragraf2' => $this->request->getVar('inputParagraf2'),
            'Paragraf3' => $this->request->getVar('inputParagraf3'),
            'Paragraf4' => $this->request->getVar('inputParagraf4'),
            'Paragraf5' => $this->request->getVar('inputParagraf5'),
            'Paragraf6' => $this->request->getVar('inputParagraf6'),
            'Paragraf7' => $this->request->getVar('inputParagraf7'),
            'Paragraf8' => $this->request->getVar('inputParagraf8'),
            'Paragraf9' => $this->request->getVar('inputParagraf9'),
            'Paragraf10' => $this->request->getVar('inputParagraf10'),
            'Paragraf11' => $this->request->getVar('inputParagraf11'),
            'Paragraf12' => $this->request->getVar('inputParagraf12'),
            'Coding1' => $Coding1,
            'Coding2' => $Coding2,
            'Coding3' => $Coding3,
            'Coding4' => $Coding4,
            'Coding5' => $Coding5,
            'Coding6' => $Coding6,
            'Coding7' => $Coding7,
            'Coding8' => $Coding8,
            'Coding9' => $Coding9,
            'Coding10' => $Coding10,
            'Coding11' => $Coding11,
            'Coding12' => $Coding12,
            'Coding1CSS' => $Coding1CSS,
            'Coding2CSS' => $Coding2CSS,
            'Coding3CSS' => $Coding3CSS,
            'Coding4CSS' => $Coding4CSS,
            'Coding5CSS' => $Coding5CSS,
            'Coding6CSS' => $Coding6CSS,
            'Coding7CSS' => $Coding7CSS,
            'Coding8CSS' => $Coding8CSS,
            'Coding9CSS' => $Coding9CSS,
            'Coding10CSS' => $Coding10CSS,
            'Coding11CSS' => $Coding11CSS,
            'Coding12CSS' => $Coding12CSS,
            'Coding1JS' => $Coding1JS,
            'Coding2JS' => $Coding2JS,
            'Coding3JS' => $Coding3JS,
            'Coding4JS' => $Coding4JS,
            'Coding5JS' => $Coding5JS,
            'Coding6JS' => $Coding6JS,
            'Coding7JS' => $Coding7JS,
            'Coding8JS' => $Coding8JS,
            'Coding9JS' => $Coding9JS,
            'Coding10JS' => $Coding10JS,
            'Coding11JS' => $Coding11JS,
            'Coding12JS' => $Coding12JS,
            'infoCoding1' => $this->request->getVar('inputInfoCoding1'),
            'infoCoding2' => $this->request->getVar('inputInfoCoding2'),
            'infoCoding3' => $this->request->getVar('inputInfoCoding3'),
            'infoCoding4' => $this->request->getVar('inputInfoCoding4'),
            'infoCoding5' => $this->request->getVar('inputInfoCoding5'),
            'infoCoding6' => $this->request->getVar('inputInfoCoding6'),
            'infoCoding7' => $this->request->getVar('inputInfoCoding7'),
            'infoCoding8' => $this->request->getVar('inputInfoCoding8'),
            'infoCoding9' => $this->request->getVar('inputInfoCoding9'),
            'infoCoding10' => $this->request->getVar('inputInfoCoding10'),
            'infoCoding11' => $this->request->getVar('inputInfoCoding11'),
            'infoCoding12' => $this->request->getVar('inputInfoCoding12'),
            'PictureP1' => $inputP1,
            'PictureP2' => $inputP2,
            'PictureP3' => $inputP3,
            'PictureP4' => $inputP4,
            'PictureP5' => $inputP5,
            'PictureP6' => $inputP6,
            'PictureP7' => $inputP7,
            'PictureP8' => $inputP8,
            'PictureP9' => $inputP9,
            'PictureP10' => $inputP10,
            'PictureP11' => $inputP11,
            'PictureP12' => $inputP12,
            'Kategori' => $this->request->getVar('inputKategori'),
        ]); 

        return redirect()->to('');
    }
}