<?php

namespace App\Controllers;

class UpdateController extends BaseController {

    protected $createAdmin;
    protected $userRegistrasi;
    protected $kolomKomentar;
    protected $kolomTugas;
    protected $chatGroup;

    public function __construct() {
        $this->createAdmin = new \App\Models\CreateModels();
        $this->userRegistrasi = new \App\Models\RegistrasiModels();
        $this->kolomKomentar = new \App\Models\KomentarModels();
        $this->kolomTugas = new \App\Models\TugasModels();
        $this->chatGroup = new \App\Models\GroupModels();
    }

    public function update($id) {

        $slugID = $this->createAdmin->where('ID', $id)->first();
        $slug = $slugID['Slug'];

        $beforeUpdate = $this->createAdmin->getCreateAdmin($this->request->getVar('ID'));
        if ($beforeUpdate['Judul'] == $this->request->getVar('inputTitle')) {
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[home.Judul]';
        }

        if (!$this->validate([
            'inputTitle' => [
                'rules' =>  $rule_judul,
                'errors' => [
                    'required' => 'Title is required!',
                    'is_unique' => 'Title already exists!'
                ]
            ],
            'inputPicture' => [
                'rules' => 'max_size[inputPicture,51200]|is_image[inputPicture]|mime_in[inputPicture,image/jpg,image/jpeg,image/png,image/dng,image/gif,image/heif, image/heic, image/tif, image/tiff, image/svg]',
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
            return redirect()->to('update_article/' . $slug)->withInput();
        }

        $idPicture = $this->createAdmin->where('ID', $id)->first();
        $idP1 = $this->createAdmin->where('ID', $id)->first();
        $idP2 = $this->createAdmin->where('ID', $id)->first();
        $idP3 = $this->createAdmin->where('ID', $id)->first();
        $idP4 = $this->createAdmin->where('ID', $id)->first();
        $idP5 = $this->createAdmin->where('ID', $id)->first();
        $idP6 = $this->createAdmin->where('ID', $id)->first();
        $idP7 = $this->createAdmin->where('ID', $id)->first();
        $idP8 = $this->createAdmin->where('ID', $id)->first();
        $idP9 = $this->createAdmin->where('ID', $id)->first();
        $idP10 = $this->createAdmin->where('ID', $id)->first();
        $idP11 = $this->createAdmin->where('ID', $id)->first();
        $idP12 = $this->createAdmin->where('ID', $id)->first();

        $slug = url_title($this->request->getVar('inputTitle'), '_', true);
        $date = $this->request->getVar('inputDateSlug');

        $picture = $this->request->getFile('inputPicture');
        if ($picture->getError() == 4) {
            $picturename = $idPicture['Picture'];
        } else {
            $outputPicture = $this->request->getFile('inputPicture');
            $picturename = $outputPicture->getRandomName();
            $outputPicture->move('ArticlePicture/', $picturename);

            if ($idPicture['Picture'] !== 'No Image.png') {
                unlink('ArticlePicture/' . $idPicture['Picture']);
            }
        }

        $P1X = $this->request->getVar('P1X');
        $P2X = $this->request->getVar('P2X');
        $P3X = $this->request->getVar('P3X');
        $P4X = $this->request->getVar('P4X');
        $P5X = $this->request->getVar('P5X');
        $P6X = $this->request->getVar('P6X');
        $P7X = $this->request->getVar('P7X');
        $P8X = $this->request->getVar('P8X');
        $P9X = $this->request->getVar('P9X');
        $P10X = $this->request->getVar('P10X');
        $P11X = $this->request->getVar('P11X');
        $P12X = $this->request->getVar('P12X');

        $picture1 = $this->request->getFile('inputP1');
        if ($picture1->getError() == 4) {
            if ($P1X !== "") {
                $inputP1 = $idP1['PictureP1'];
            } else {
                $inputP1 = "";
                if ($idP1['PictureP1'] !== "") {
                    unlink('ArticlePicture/' . $idP1['PictureP1']);
                }
            }
        } else {
            $outputPicture = $this->request->getFile('inputP1');
            $inputP1 = $outputPicture->getRandomName();
            $outputPicture->move('ArticlePicture/', $inputP1);

            $P1 = $this->request->getVar('P1');
            if ($P1 !== "") {
                unlink('ArticlePicture/' . $idP1['PictureP1']);
            }
        }

        $picture2 = $this->request->getFile('inputP2');
        if ($picture2->getError() == 4) {
            if ($P2X !== "") {
                $inputP2 = $idP2['PictureP2'];
            } else {
                $inputP2 = "";
                if ($idP2['PictureP2'] !== "") {
                    unlink('ArticlePicture/' . $idP2['PictureP2']);
                }
            }
        } else {
            $outputPicture = $this->request->getFile('inputP2');
            $inputP2 = $outputPicture->getRandomName();
            $outputPicture->move('ArticlePicture/', $inputP2);

            $P2 = $this->request->getVar('P2');
            if ($P2 !== "") {
                unlink('ArticlePicture/' . $idP2['PictureP2']);
            }
        }

        $picture3 = $this->request->getFile('inputP3');
        if ($picture3->getError() == 4) {
            if ($P3X !== "") {
                $inputP3 = $idP3['PictureP3'];
            } else {
                $inputP3 = "";
                if ($idP3['PictureP3'] !== "") {
                    unlink('ArticlePicture/' . $idP3['PictureP3']);
                }
            }
        } else {
            $outputPicture = $this->request->getFile('inputP3');
            $inputP3 = $outputPicture->getRandomName();
            $outputPicture->move('ArticlePicture/', $inputP3);

            $P3 = $this->request->getVar('P3');
            if ($P3 !== "") {
                unlink('ArticlePicture/' . $idP3['PictureP3']);
            }
        }

        $picture4 = $this->request->getFile('inputP4');
        if ($picture4->getError() == 4) {
            if ($P4X !== "") {
                $inputP4 = $idP4['PictureP4'];
            } else {
                $inputP4 = "";
                if ($idP4['PictureP4'] !== "") {
                    unlink('ArticlePicture/' . $idP4['PictureP4']);
                }
            }
        } else {
            $outputPicture = $this->request->getFile('inputP4');
            $inputP4 = $outputPicture->getRandomName();
            $outputPicture->move('ArticlePicture/', $inputP4);

            $P4 = $this->request->getVar('P4');
            if ($P4 !== "") {
                unlink('ArticlePicture/' . $idP4['PictureP4']);
            }
        }

        $picture5 = $this->request->getFile('inputP5');
        if ($picture5->getError() == 4) {
            if ($P5X !== "") {
                $inputP5 = $idP5['PictureP5'];
            } else {
                $inputP5 = "";
                if ($idP5['PictureP5'] !== "") {
                    unlink('ArticlePicture/' . $idP5['PictureP5']);
                }
            }
        } else {
            $outputPicture = $this->request->getFile('inputP5');
            $inputP5 = $outputPicture->getRandomName();
            $outputPicture->move('ArticlePicture/', $inputP5);

            $P5 = $this->request->getVar('P5');
            if ($P5 !== "") {
                unlink('ArticlePicture/' . $idP5['PictureP5']);
            }
        }

        $picture6 = $this->request->getFile('inputP6');
        if ($picture6->getError() == 4) {
            if ($P6X !== "") {
                $inputP6 = $idP6['PictureP6'];
            } else {
                $inputP6 = "";
                if ($idP6['PictureP6'] !== "") {
                    unlink('ArticlePicture/' . $idP6['PictureP6']);
                }
            }
        } else {
            $outputPicture = $this->request->getFile('inputP6');
            $inputP6 = $outputPicture->getRandomName();
            $outputPicture->move('ArticlePicture/', $inputP6);

            $P6 = $this->request->getVar('P6');
            if ($P6 !== "") {
                unlink('ArticlePicture/' . $idP6['PictureP6']);
            }
        }

        $picture7 = $this->request->getFile('inputP7');
        if ($picture7->getError() == 4) {
            if ($P7X !== "") {
                $inputP7 = $idP7['PictureP7'];
            } else {
                $inputP7 = "";
                if ($idP7['PictureP7'] !== "") {
                    unlink('ArticlePicture/' . $idP7['PictureP7']);
                }
            }
        } else {
            $outputPicture = $this->request->getFile('inputP7');
            $inputP7 = $outputPicture->getRandomName();
            $outputPicture->move('ArticlePicture/', $inputP7);

            $P7 = $this->request->getVar('P7');
            if ($P7 !== "") {
                unlink('ArticlePicture/' . $idP7['PictureP7']);
            }
        }

        $picture8 = $this->request->getFile('inputP8');
        if ($picture8->getError() == 4) {
            if ($P8X !== "") {
                $inputP8 = $idP8['PictureP8'];
            } else {
                $inputP8 = "";
                if ($idP8['PictureP8'] !== "") {
                    unlink('ArticlePicture/' . $idP8['PictureP8']);
                }
            }
        } else {
            $outputPicture = $this->request->getFile('inputP8');
            $inputP8 = $outputPicture->getRandomName();
            $outputPicture->move('ArticlePicture/', $inputP8);

            $P8 = $this->request->getVar('P8');
            if ($P8 !== "") {
                unlink('ArticlePicture/' . $idP8['PictureP8']);
            }
        }

        $picture9 = $this->request->getFile('inputP9');
        if ($picture9->getError() == 4) {
            if ($P9X !== "") {
                $inputP9 = $idP9['PictureP9'];
            } else {
                $inputP9 = "";
                if ($idP9['PictureP9'] !== "") {
                    unlink('ArticlePicture/' . $idP9['PictureP9']);
                }
            }
        } else {
            $outputPicture = $this->request->getFile('inputP9');
            $inputP9 = $outputPicture->getRandomName();
            $outputPicture->move('ArticlePicture/', $inputP9);

            $P9 = $this->request->getVar('P9');
            if ($P9 !== "") {
                unlink('ArticlePicture/' . $idP9['PictureP9']);
            }
        }

        $picture10 = $this->request->getFile('inputP10');
        if ($picture10->getError() == 4) {
            if ($P10X !== "") {
                $inputP10 = $idP10['PictureP10'];
            } else {
                $inputP10 = "";
                if ($idP10['PictureP10'] !== "") {
                    unlink('ArticlePicture/' . $idP10['PictureP10']);
                }
            }
        } else {
            $outputPicture = $this->request->getFile('inputP10');
            $inputP10 = $outputPicture->getRandomName();
            $outputPicture->move('ArticlePicture/', $inputP10);

            $P10 = $this->request->getVar('P10');
            if ($P10 !== "") {
                unlink('ArticlePicture/' . $idP10['PictureP10']);
            }
        }

        $picture11 = $this->request->getFile('inputP11');
        if ($picture11->getError() == 4) {
            if ($P11X !== "") {
                $inputP11 = $idP11['PictureP11'];
            } else {
                $inputP11 = "";
                if ($idP11['PictureP11'] !== "") {
                    unlink('ArticlePicture/' . $idP11['PictureP11']);
                }
            }
        } else {
            $outputPicture = $this->request->getFile('inputP11');
            $inputP11 = $outputPicture->getRandomName();
            $outputPicture->move('ArticlePicture/', $inputP11);

            $P11 = $this->request->getVar('P11');
            if ($P11 !== "") {
                unlink('ArticlePicture/' . $idP11['PictureP11']);
            }
        }

        $picture12 = $this->request->getFile('inputP12');
        if ($picture12->getError() == 4) {
            if ($P12X !== "") {
                $inputP12 = $idP12['PictureP12'];
            } else {
                $inputP12 = "";
                if ($idP12['PictureP12'] !== "") {
                    unlink('ArticlePicture/' . $idP12['PictureP12']);
                }
            }
        } else {
            $outputPicture = $this->request->getFile('inputP12');
            $inputP12 = $outputPicture->getRandomName();
            $outputPicture->move('ArticlePicture/', $inputP12);

            $P12 = $this->request->getVar('P12');
            if ($P12 !== "") {
                unlink('ArticlePicture/' . $idP12['PictureP12']);
            }
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

        $JudulOld = $beforeUpdate['Judul'];
        $KategoriOld = $beforeUpdate['Kategori'];

        $Judul = $this->request->getVar('inputTitle');
        
        if ($KategoriOld == "Tugas") {
            if (!empty($JudulOld) && !empty($Judul) && $Judul !== $JudulOld) {
                $oldFolderPath = 'FileTugas/' . $JudulOld;
                $newFolderPath = 'FileTugas/' . $Judul;
            
                rename($oldFolderPath, $newFolderPath);
            }
        }

        $this->createAdmin->save([
            'id' => $id,
            'Slug' => $slug . $date,
            'DateSlug' => $date,
            'Judul' => $Judul,
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

    public function updatedetail($id) {

        $slugID = $this->createAdmin->where('ID', $id)->first();
        $slug = $slugID['Slug'];

        $beforeUpdate = $this->createAdmin->getCreateAdmin($this->request->getVar('ID'));
        if ($beforeUpdate['Judul'] == $this->request->getVar('inputTitle')) {
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[home.Judul]';
        }

        if (!$this->validate([
            'inputTitle' => [
                'rules' =>  $rule_judul,
                'errors' => [
                    'required' => 'Title is required!',
                    'is_unique' => 'Title already exists!'
                ]
            ],
            'inputPicture' => [
                'rules' => 'max_size[inputPicture,51200]|is_image[inputPicture]|mime_in[inputPicture,image/jpg,image/jpeg,image/png,image/dng,image/gif,image/heif, image/heic, image/tif, image/tiff, image/svg]',
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
            return redirect()->to('article/update/' . $slug)->withInput();
        }

        $idPicture = $this->createAdmin->where('ID', $id)->first();
        $idP1 = $this->createAdmin->where('ID', $id)->first();
        $idP2 = $this->createAdmin->where('ID', $id)->first();
        $idP3 = $this->createAdmin->where('ID', $id)->first();
        $idP4 = $this->createAdmin->where('ID', $id)->first();
        $idP5 = $this->createAdmin->where('ID', $id)->first();
        $idP6 = $this->createAdmin->where('ID', $id)->first();
        $idP7 = $this->createAdmin->where('ID', $id)->first();
        $idP8 = $this->createAdmin->where('ID', $id)->first();
        $idP9 = $this->createAdmin->where('ID', $id)->first();
        $idP10 = $this->createAdmin->where('ID', $id)->first();
        $idP11 = $this->createAdmin->where('ID', $id)->first();
        $idP12 = $this->createAdmin->where('ID', $id)->first();

        $slug = url_title($this->request->getVar('inputTitle'), '_', true);
        $date = $this->request->getVar('inputDateSlug');

        $picture = $this->request->getFile('inputPicture');
        if ($picture->getError() == 4) {
            $picturename = $idPicture['Picture'];
        } else {
            $outputPicture = $this->request->getFile('inputPicture');
            $picturename = $outputPicture->getRandomName();
            $outputPicture->move('ArticlePicture/', $picturename);

            if ($idPicture['Picture'] !== 'No Image.png') {
                unlink('ArticlePicture/' . $idPicture['Picture']);
            }
        }

        $P1X = $this->request->getVar('P1X');
        $P2X = $this->request->getVar('P2X');
        $P3X = $this->request->getVar('P3X');
        $P4X = $this->request->getVar('P4X');
        $P5X = $this->request->getVar('P5X');
        $P6X = $this->request->getVar('P6X');
        $P7X = $this->request->getVar('P7X');
        $P8X = $this->request->getVar('P8X');
        $P9X = $this->request->getVar('P9X');
        $P10X = $this->request->getVar('P10X');
        $P11X = $this->request->getVar('P11X');
        $P12X = $this->request->getVar('P12X');

        $picture1 = $this->request->getFile('inputP1');
        if ($picture1->getError() == 4) {
            if ($P1X !== "") {
                $inputP1 = $idP1['PictureP1'];
            } else {
                $inputP1 = "";
                if ($idP1['PictureP1'] !== "") {
                    unlink('ArticlePicture/' . $idP1['PictureP1']);
                }
            }
        } else {
            $outputPicture = $this->request->getFile('inputP1');
            $inputP1 = $outputPicture->getRandomName();
            $outputPicture->move('ArticlePicture/', $inputP1);

            $P1 = $this->request->getVar('P1');
            if ($P1 !== "") {
                unlink('ArticlePicture/' . $idP1['PictureP1']);
            }
        }

        $picture2 = $this->request->getFile('inputP2');
        if ($picture2->getError() == 4) {
            if ($P2X !== "") {
                $inputP2 = $idP2['PictureP2'];
            } else {
                $inputP2 = "";
                if ($idP2['PictureP2'] !== "") {
                    unlink('ArticlePicture/' . $idP2['PictureP2']);
                }
            }
        } else {
            $outputPicture = $this->request->getFile('inputP2');
            $inputP2 = $outputPicture->getRandomName();
            $outputPicture->move('ArticlePicture/', $inputP2);

            $P2 = $this->request->getVar('P2');
            if ($P2 !== "") {
                unlink('ArticlePicture/' . $idP2['PictureP2']);
            }
        }

        $picture3 = $this->request->getFile('inputP3');
        if ($picture3->getError() == 4) {
            if ($P3X !== "") {
                $inputP3 = $idP3['PictureP3'];
            } else {
                $inputP3 = "";
                if ($idP3['PictureP3'] !== "") {
                    unlink('ArticlePicture/' . $idP3['PictureP3']);
                }
            }
        } else {
            $outputPicture = $this->request->getFile('inputP3');
            $inputP3 = $outputPicture->getRandomName();
            $outputPicture->move('ArticlePicture/', $inputP3);

            $P3 = $this->request->getVar('P3');
            if ($P3 !== "") {
                unlink('ArticlePicture/' . $idP3['PictureP3']);
            }
        }

        $picture4 = $this->request->getFile('inputP4');
        if ($picture4->getError() == 4) {
            if ($P4X !== "") {
                $inputP4 = $idP4['PictureP4'];
            } else {
                $inputP4 = "";
                if ($idP4['PictureP4'] !== "") {
                    unlink('ArticlePicture/' . $idP4['PictureP4']);
                }
            }
        } else {
            $outputPicture = $this->request->getFile('inputP4');
            $inputP4 = $outputPicture->getRandomName();
            $outputPicture->move('ArticlePicture/', $inputP4);

            $P4 = $this->request->getVar('P4');
            if ($P4 !== "") {
                unlink('ArticlePicture/' . $idP4['PictureP4']);
            }
        }

        $picture5 = $this->request->getFile('inputP5');
        if ($picture5->getError() == 4) {
            if ($P5X !== "") {
                $inputP5 = $idP5['PictureP5'];
            } else {
                $inputP5 = "";
                if ($idP5['PictureP5'] !== "") {
                    unlink('ArticlePicture/' . $idP5['PictureP5']);
                }
            }
        } else {
            $outputPicture = $this->request->getFile('inputP5');
            $inputP5 = $outputPicture->getRandomName();
            $outputPicture->move('ArticlePicture/', $inputP5);

            $P5 = $this->request->getVar('P5');
            if ($P5 !== "") {
                unlink('ArticlePicture/' . $idP5['PictureP5']);
            }
        }

        $picture6 = $this->request->getFile('inputP6');
        if ($picture6->getError() == 4) {
            if ($P6X !== "") {
                $inputP6 = $idP6['PictureP6'];
            } else {
                $inputP6 = "";
                if ($idP6['PictureP6'] !== "") {
                    unlink('ArticlePicture/' . $idP6['PictureP6']);
                }
            }
        } else {
            $outputPicture = $this->request->getFile('inputP6');
            $inputP6 = $outputPicture->getRandomName();
            $outputPicture->move('ArticlePicture/', $inputP6);

            $P6 = $this->request->getVar('P6');
            if ($P6 !== "") {
                unlink('ArticlePicture/' . $idP6['PictureP6']);
            }
        }

        $picture7 = $this->request->getFile('inputP7');
        if ($picture7->getError() == 4) {
            if ($P7X !== "") {
                $inputP7 = $idP7['PictureP7'];
            } else {
                $inputP7 = "";
                if ($idP7['PictureP7'] !== "") {
                    unlink('ArticlePicture/' . $idP7['PictureP7']);
                }
            }
        } else {
            $outputPicture = $this->request->getFile('inputP7');
            $inputP7 = $outputPicture->getRandomName();
            $outputPicture->move('ArticlePicture/', $inputP7);

            $P7 = $this->request->getVar('P7');
            if ($P7 !== "") {
                unlink('ArticlePicture/' . $idP7['PictureP7']);
            }
        }

        $picture8 = $this->request->getFile('inputP8');
        if ($picture8->getError() == 4) {
            if ($P8X !== "") {
                $inputP8 = $idP8['PictureP8'];
            } else {
                $inputP8 = "";
                if ($idP8['PictureP8'] !== "") {
                    unlink('ArticlePicture/' . $idP8['PictureP8']);
                }
            }
        } else {
            $outputPicture = $this->request->getFile('inputP8');
            $inputP8 = $outputPicture->getRandomName();
            $outputPicture->move('ArticlePicture/', $inputP8);

            $P8 = $this->request->getVar('P8');
            if ($P8 !== "") {
                unlink('ArticlePicture/' . $idP8['PictureP8']);
            }
        }

        $picture9 = $this->request->getFile('inputP9');
        if ($picture9->getError() == 4) {
            if ($P9X !== "") {
                $inputP9 = $idP9['PictureP9'];
            } else {
                $inputP9 = "";
                if ($idP9['PictureP9'] !== "") {
                    unlink('ArticlePicture/' . $idP9['PictureP9']);
                }
            }
        } else {
            $outputPicture = $this->request->getFile('inputP9');
            $inputP9 = $outputPicture->getRandomName();
            $outputPicture->move('ArticlePicture/', $inputP9);

            $P9 = $this->request->getVar('P9');
            if ($P9 !== "") {
                unlink('ArticlePicture/' . $idP9['PictureP9']);
            }
        }

        $picture10 = $this->request->getFile('inputP10');
        if ($picture10->getError() == 4) {
            if ($P10X !== "") {
                $inputP10 = $idP10['PictureP10'];
            } else {
                $inputP10 = "";
                if ($idP10['PictureP10'] !== "") {
                    unlink('ArticlePicture/' . $idP10['PictureP10']);
                }
            }
        } else {
            $outputPicture = $this->request->getFile('inputP10');
            $inputP10 = $outputPicture->getRandomName();
            $outputPicture->move('ArticlePicture/', $inputP10);

            $P10 = $this->request->getVar('P10');
            if ($P10 !== "") {
                unlink('ArticlePicture/' . $idP10['PictureP10']);
            }
        }

        $picture11 = $this->request->getFile('inputP11');
        if ($picture11->getError() == 4) {
            if ($P11X !== "") {
                $inputP11 = $idP11['PictureP11'];
            } else {
                $inputP11 = "";
                if ($idP11['PictureP11'] !== "") {
                    unlink('ArticlePicture/' . $idP11['PictureP11']);
                }
            }
        } else {
            $outputPicture = $this->request->getFile('inputP11');
            $inputP11 = $outputPicture->getRandomName();
            $outputPicture->move('ArticlePicture/', $inputP11);

            $P11 = $this->request->getVar('P11');
            if ($P11 !== "") {
                unlink('ArticlePicture/' . $idP11['PictureP11']);
            }
        }

        $picture12 = $this->request->getFile('inputP12');
        if ($picture12->getError() == 4) {
            if ($P12X !== "") {
                $inputP12 = $idP12['PictureP12'];
            } else {
                $inputP12 = "";
                if ($idP12['PictureP12'] !== "") {
                    unlink('ArticlePicture/' . $idP12['PictureP12']);
                }
            }
        } else {
            $outputPicture = $this->request->getFile('inputP12');
            $inputP12 = $outputPicture->getRandomName();
            $outputPicture->move('ArticlePicture/', $inputP12);

            $P12 = $this->request->getVar('P12');
            if ($P12 !== "") {
                unlink('ArticlePicture/' . $idP12['PictureP12']);
            }
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

        $JudulOld = $beforeUpdate['Judul'];
        $KategoriOld = $beforeUpdate['Kategori'];

        $Judul = $this->request->getVar('inputTitle');
        
        if ($KategoriOld == "Tugas") {
            if (!empty($JudulOld) && !empty($Judul) && $Judul !== $JudulOld) {
                $oldFolderPath = 'FileTugas/' . $JudulOld;
                $newFolderPath = 'FileTugas/' . $Judul;
            
                rename($oldFolderPath, $newFolderPath);
            }
        }

        $this->createAdmin->save([
            'id' => $id,
            'Slug' => $slug . $date,
            'Judul' => $Judul,
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
        return redirect()->to('article/' . $slug . $date);
    }

    public function delete($slug) {
        $idX = $this->createAdmin->where('Slug', $slug)->first();

        $id = $idX['ID'];

        $idPicture = $this->request->getVar('Picture');
        if ($idPicture !== 'No Image.png') {
            unlink('ArticlePicture/' . $idPicture);
        }

        $idP1 = $this->request->getVar('P1');
        $idP2 = $this->request->getVar('P2');
        $idP3 = $this->request->getVar('P3');
        $idP4 = $this->request->getVar('P4');
        $idP5 = $this->request->getVar('P5');
        $idP6 = $this->request->getVar('P6');
        $idP7 = $this->request->getVar('P7');
        $idP8 = $this->request->getVar('P8');
        $idP9 = $this->request->getVar('P9');
        $idP10 = $this->request->getVar('P10');
        $idP11 = $this->request->getVar('P11');
        $idP12 = $this->request->getVar('P12');

        if ($idP1 !== "") {
            unlink('ArticlePicture/'. $idP1);
            }
        if ($idP2 !== "") {
        unlink('ArticlePicture/'. $idP2);
        }
        if ($idP3 !== "") {
        unlink('ArticlePicture/'. $idP3);
        }
        if ($idP4 !== "") {
        unlink('ArticlePicture/'. $idP4);
        }
        if ($idP5 !== "") {
        unlink('ArticlePicture/'. $idP5);
        }
        if ($idP6 !== "") {
        unlink('ArticlePicture/'. $idP6);
        }
        if ($idP7 !== "") {
        unlink('ArticlePicture/'. $idP7);
        }
        if ($idP8 !== "") {
        unlink('ArticlePicture/'. $idP8);
        }
        if ($idP9 !== "") {
        unlink('ArticlePicture/'. $idP9);
        }
        if ($idP10 !== "") {
        unlink('ArticlePicture/'. $idP10);
        }
        if ($idP11 !== "") {
        unlink('ArticlePicture/'. $idP11);
        }
        if ($idP10 !== "") {
        unlink('ArticlePicture/'. $idP12);
        }

        $dbKomentar = $this->kolomKomentar->where('IDArtikel', $id)->first();

        if ($dbKomentar !== null) {
            $this->kolomKomentar->delete($dbKomentar);

            if ($dbKomentar['Picture'] !== "") {
                unlink('CommentPicture/' . $dbKomentar['Picture']);
            }
        }

        $this->createAdmin->delete($id);

        return redirect()->to('');
    }
}