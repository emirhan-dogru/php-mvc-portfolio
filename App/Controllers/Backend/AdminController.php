<?php

namespace App\Controllers\Backend;

use App\Models\About;
use App\Models\Blogs;
use App\Models\Contact;
use App\Models\Portfolio;
use App\Models\Settings;
use App\Models\Skills;
use Core\Auth;
use Core\Controller;

class AdminController extends Controller
{
    //login
public function loginPage() {
    return $this->view('backend.layout.login');
}

    public function login()
    {
        $admins = Settings::where(['email' => $_POST['email']])->first();
        if ($admins) {
            $admins = $admins->toArray();
            if (passwordVerify($admins['password'] , $_POST['password'])) {
                auth()->create('adminAuth', [
                    "id" => $admins['id'],
                    'name' => $admins['name_surname']
                ]);

                Settings::where('id' , 1)->update(['firstLogin' => 1]);

                header('Location:' . admin_url('/'));
                exit();
            } else {
                header('Location:' . admin_url('/login?success=false'));
                exit();
            }
        } else {
            header('Location:' . admin_url('/login?success=false'));
            exit();
        }
    }

//index
    public function index()
    {
        return $this->view('backend.index');
    }


    //about
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

    //skills
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


    //portfolio
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

            Portfolio::where('id' , $id)->update([
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
            header('Location: ' . admin_url('/portfolio' . $message));

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


    //blog
    public function blog() {
        $blogs = Blogs::get();
        return $this->view('backend.blog' , compact('blogs'));
    }

    public function blogAdd() {
        return $this->view('backend.blog-add');
    }

    public function blogSave() {
        try { 

            $blog_name = $_POST['name'];
            $content = $_POST['content'];

            if (empty($blog_name) || empty($content)) {
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

                $addBlog = Blogs::create([
                    "name" => $blog_name,
                    "content" => $content,
                    "img_url" => $img,
                    "small_img_url" => $small_img,
                    "img_path" => $directory
                ]);
    
                if (!$addBlog) {
                    throw "Ekleme işlemi sırasında sorun yaşandı";
                }

            }
            else {
                throw "Lütfen bir resim seçiniz";
            }

           

            header('Location: ' . admin_url('/blog?success=true'));

        } catch (\Exception $e) {  
            $message = '?success=false';
            header('Location: ' . admin_url('/blog' . $message));

        }
    }

    public function blogEdit($id) {
        $blog = Blogs::where("id" , $id)->first();
        return $this->view('backend.blog-update' , compact('blog'));
    }

    public function blogUpdate($id) {
        try { 
            $blog_name = $_POST['name'];
            $content = $_POST['content'];

            if (empty($blog_name) || empty($content)) {
                throw "Boş alan bırakmayınız";
            }

            Blogs::where('id' , $id)->update([
                "name" => $blog_name,
                "content" => $content
            ]);

            if (isset($_FILES['img']) && $_FILES['img']['size'] > 0) {
                $name = guid();
                $directory = imgDir();

                $upload = upload($_FILES['img']);

                $small = $upload->resize(250)->prefix("small")->rename($name)->to($directory);
                $original = $upload->rename($name)->to($directory);

                $img = $original->getFile();
                $small_img = $small->getFile();

                $Updateİmage = Blogs::where('id' , $id)->update([
                    "img_url" => $img,
                    "small_img_url" => $small_img,
                    "img_path" => $directory
                ]);
    
                if (!$Updateİmage) {
                    throw "Resim ekleme sırasında sorun yaşandı";
                }

            }

           

            header('Location: ' . admin_url('/blog?success=true'));

        } catch (\Exception $e) {  
            $message = '?success=false';
            header('Location: ' . admin_url('/blog' . $message));

        }
    }

    public function blogDelete($id) {
       try {
            $deleteBlog = Blogs::where("id" , $id)->delete();

            if (!$deleteBlog) {
                throw "Silme işlemi sırasında sorun yaşandı";
            }

            header('Location: ' . admin_url('/blog?success=true'));

        } catch (\Exception $e) {  
            $message = '?success=false';
            header('Location: ' . admin_url('/blog' . $message));

        }
    }

    //contact
    public function contact() {
        $contacts = Contact::get();
        return $this->view('backend.contact' , compact('contacts'));
    }

    //settings
    public function settings() {
        $settings = Settings::where('id' , 1)->first();
        return $this->view('backend.settings' , compact('settings'));
    }

    public function settingsUpdate() {
        try { 

            $name_surname = $_POST['name_surname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $passwordTwo = $_POST['passwordTwo'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $keywords = $_POST['keywords'];
            $author = $_POST['author'];
            $facebook = $_POST['facebook'];
            $twitter = $_POST['twitter'];
            $instagram = $_POST['instagram'];
            $website = $_POST['website'];
            $github = $_POST['github'];

          Settings::where("id" , "1")->update([
                "name_surname" => $name_surname,
                "email" => $email,
                "website_title" => $title,
                "website_description" => $description,
                "website_keywords" => $keywords,
                "website_author" => $author,
                "facebook" => $facebook,
                "twitter" => $twitter,
                "instagram" => $instagram,
                "website" => $website,
                "github" => $github
            ]);

            if (!empty($password) && !empty($passwordTwo)) {
                if ($password == $passwordTwo) {
                    $updatePassword = Settings::where("id" , "1")->update([
                        "password" => passwordHash($password)
                    ]);

                    if (!$updatePassword) {
                        throw "Şifre güncelleme sırasında sorun yaşandı";
                    }
                }
                else {
                    throw "Şifreler uyuşmuyor";
                }
            }


            header('Location: ' . admin_url('/settings?success=true'));

        } catch (\Exception $e) {  
            $message = '?success=false';
            header('Location: ' . admin_url('/settings' . $message));

        }
    }
}

?>
