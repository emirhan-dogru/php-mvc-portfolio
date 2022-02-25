<?php

namespace App\Controllers\Backend;

use App\Models\About;
use App\Models\Portfolio;
use App\Models\Skills;
use Core\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return $this->view('backend.index');
    }

    public function about()
    {
        $user = About::find(1);
        return $this->view('backend.about' , compact('user'));
    }

    public function aboutAdd()
    {
            try { 

                $name_surname = $_POST['name_surname'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $birthdate = $_POST['birthdate'];
                $job = $_POST['job'];
                $adress = $_POST['adress'];
                $bio = $_POST['bio'];
                $short_skills = $_POST['short_skills'];

              $updateAbout = About::where("id" , "1")->update([
                "name_surname" => $name_surname,
                "email" => $email,
                "phone" => $phone,
                "birthdate" => $birthdate,
                "job" => $job,
                "adress" => $adress,
                "bio" => $bio,
                "short_skills" => $short_skills
              ]); 
 
              if(!$updateAbout){
                throw "Hakkımda güncellenirken sorun yaşandı";
              } 


                  
                if (isset($_FILES['img']) && $_FILES['img']['size'] > 0) {
                    $name = guid();
                    $directory = imgDir();

                    $upload = upload($_FILES['img']);

                    $small = $upload->resize(250)->prefix("small")->rename($name)->to($directory);
                    $original = $upload->rename($name)->to($directory);

                    $img = $original->getFile();
                    $small_img = $small->getFile();

                   $updateImage = About::where("id" , 1)->update([
                        "img_url" => $img,
                        "small_img_url" => $small_img,
                        "img_path" => $directory
                    ]);

                    if(!$updateImage) {
                        throw "Resim güncellenirken sorun yaşandı";
                    }

                }
 
                header('Location: ' . admin_url('/about?success=true'));

            } catch (\Exception $e) {  
                $message = '?success=false';
                header('Location: ' . admin_url('/about' . $message));

            }

         
    }

    public function skills()
    {
        $skills = Skills::get();
        return $this->view('backend.skills' , compact('skills'));
    }

    public function skillAdd() {
        return $this->view('backend.skill-add');
    }

    public function skillSave() {
        try { 

            $key = $_POST['key'];
            $value = $_POST['value'];
            $progress = $_POST['progress'];

            if (empty($key) || empty($value)) {
                throw "Boş alan bırakmayınız";
            }
            if (!empty($progress)) {
                if (!is_numeric($progress)) {
                    throw "Lütfen sayısal değer giriniz";
                }
                else if ($progress < 0 || $progress > 100) {
                    throw "Lütfen 0 ile 100 arasında bir değer giriniz";
                }
            }

            $addSkill = Skills::create([
                "key" => $key,
                "value" => $value,
                "progress" => $progress
            ]);

            if (!$addSkill) {
                throw "Ekleme işlemi sırasında sorun yaşandı";
            }

            header('Location: ' . admin_url('/skills?success=true'));

        } catch (\Exception $e) {  
            $message = '?success=false';
            header('Location: ' . admin_url('/skills' . $message));

        }
    }

    public function skillEdit($id) {
        $skill = Skills::where("id" , $id)->first();
        return $this->view('backend.skill-update' , compact('skill'));
    }

    public function skillUpdate($id) {
        try { 
            $key = $_POST['key'];
            $value = $_POST['value'];
            $progress = $_POST['progress'];

            if (empty($key) || empty($value)) {
                throw "Boş alan bırakmayınız";
            }
            if (!empty($progress)) {
                if (!is_numeric($progress)) {
                    throw "Lütfen sayısal değer giriniz";
                }
                else if ($progress < 0 || $progress > 100) {
                    throw "Lütfen 0 ile 100 arasında bir değer giriniz";
                }
            }

            $updateSkill = Skills::where("id" , $id)->update([
                "key" => $key,
                "value" => $value,
                "progress" => $progress
            ]);

            if (!$updateSkill) {
                throw "Güncelleme işlemi sırasında sorun yaşandı";
            }

            header('Location: ' . admin_url('/skills?success=true'));

        } catch (\Exception $e) {  
            $message = '?success=false';
            header('Location: ' . admin_url('/skills' . $message));

        }
    }

    public function skillDelete($id) {
       try {
            $deleteSkill = Skills::where("id" , $id)->delete();

            if (!$deleteSkill) {
                throw "Silme işlemi sırasında sorun yaşandı";
            }

            header('Location: ' . admin_url('/skills?success=true'));

        } catch (\Exception $e) {  
            $message = '?success=false';
            header('Location: ' . admin_url('/skills' . $message));

        }
    }

    public function portfolio()
    {
        $portfolios = Portfolio::get();
        return $this->view('backend.portfolio' , compact('portfolios'));
    }

    public function portfolioAdd() {
        return $this->view('backend.portfolio-add');
    }

    public function portfolioSave() {
        try { 

            $portfolio_name = $_POST['name'];
            $category_name = $_POST['category_name'];
            $url = $_POST['url'];

            if (empty($portfolio_name) || empty($category_name)) {
                throw "Boş alan bırakmayınız";
            }

            if (isset($_FILES['img']) && $_FILES['img']['size'] > 0) {
                $name = guid();
                $directory = imgDir();

                $upload = upload($_FILES['img']);

                $small = $upload->resize(250)->prefix("small")->rename($name)->to($directory);
                $original = $upload->rename($name)->to($directory);

                $img = $original->getFile();
                $small_img = $small->getFile();

                $addPortfolio = Portfolio::create([
                    "name" => $portfolio_name,
                    "category_name" => $category_name,
                    "url" => $url,
                    "img_url" => $img,
                    "small_img_url" => $small_img,
                    "img_path" => $directory
                ]);
    
                if (!$addPortfolio) {
                    throw "Ekleme işlemi sırasında sorun yaşandı";
                }

            }
            else {
                throw "Lütfen bir resim seçiniz";
            }

           

            header('Location: ' . admin_url('/portfolio?success=true'));

        } catch (\Exception $e) {  
            $message = '?success=false';
            header('Location: ' . admin_url('/portfolio' . $message));

        }
    }

    public function portfolioEdit($id) {
        $portfolio = Portfolio::where("id" , $id)->first();
        return $this->view('backend.portfolio-update' , compact('portfolio'));
    }

    public function portfolioUpdate($id) {
        try { 
            $portfolio_name = $_POST['name'];
            $category_name = $_POST['category_name'];
            $url = $_POST['url'];

            if (empty($portfolio_name) || empty($category_name)) {
                throw "Boş alan bırakmayınız";
            }

            $updatePortfolio = Portfolio::where('id' , $id)->update([
                "name" => $portfolio_name,
                "category_name" => $category_name,
                "url" => $url
            ]);

            if (isset($_FILES['img']) && $_FILES['img']['size'] > 0) {
                $name = guid();
                $directory = imgDir();

                $upload = upload($_FILES['img']);

                $small = $upload->resize(250)->prefix("small")->rename($name)->to($directory);
                $original = $upload->rename($name)->to($directory);

                $img = $original->getFile();
                $small_img = $small->getFile();

                $Updateİmage = Portfolio::where('id' , $id)->update([
                    "img_url" => $img,
                    "small_img_url" => $small_img,
                    "img_path" => $directory
                ]);
    
                if (!$Updateİmage) {
                    throw "Resim ekleme sırasında sorun yaşandı";
                }

            }

           

            header('Location: ' . admin_url('/portfolio?success=true'));

        } catch (\Exception $e) {  
            $message = '?success=false';
            header('Location: ' . admin_url('/skills' . $message));

        }
    }

    public function portfolioDelete($id) {
       try {
            $deletePortfolio = Portfolio::where("id" , $id)->delete();

            if (!$deletePortfolio) {
                throw "Silme işlemi sırasında sorun yaşandı";
            }

            header('Location: ' . admin_url('/portfolio?success=true'));

        } catch (\Exception $e) {  
            $message = '?success=false';
            header('Location: ' . admin_url('/portfolio' . $message));

        }
    }
}
