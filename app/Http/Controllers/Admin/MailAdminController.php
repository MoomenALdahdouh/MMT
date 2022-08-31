<?php
/*TODO:: By Eng. Moomen Sameer Aldahdouh 0599124279, moomenaldahdouh@gmail.com*/
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\TestEmail;
use App\Models\Settings;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;

class MailAdminController extends Controller
{


    public function index(Request $request)
    {
        $to_name = 'RECEIVER_NAME';
        $to_email = 'RECEIVER_EMAIL_ADDRESS';
        //$data = array('name' => Cloudways(sender_name), 'body' => 'A test mail');
        //$new_password = uniqid();
        $new_password = $this->unique_code(30);
        $link = env("APP_URL").'/reset_password/confirm/'.$new_password;
        $smtp = Settings::query()->get()->first();
        /*Config::set('MAIL_HOST', $smtp->mail_host);
        Config::set('MAIL_USERNAME', $smtp->smtp_username);
        Config::set('MAIL_PASSWORD', $smtp->smtp_password);
        Config::set('MAIL_FROM_ADDRESS', $smtp->mail_from_email);*/
        //config(['MAIL_HOST'=> $smtp->mail_host]);
        //config(['MAIL_USERNAME'=> $smtp->smtp_username]);
        //config(['MAIL_PASSWORD'=> $smtp->smtp_password]);
        //config(['MAIL_FROM_ADDRESS'=> $smtp->mail_from_email]);//TODO
        $data = [
            'recipient' => $request->email,
            'fromEmail' => $smtp->mail_from_email,
            'fromName' => $smtp->mail_from_name,
            'subject' => trans("sts.Reset Password"),
            'body' => [$request->email, $link],
        ];
        Mail::send('admin.emails.email-template', $data, function ($message) use ($data) {
            $message->to($data['recipient'])
                ->from($data['fromEmail'], $data['fromName'])
                ->subject($data['subject']);
        });

        //return 'Email sent Successfully';
        $user = User::query()->where("email", $request->email)->get()->first();
        $user->reset_password = $new_password;
        $user->save();
        return response()->json(['success' => $link]);
        //return view("about");
    }

    function setEnv($name, $value)
    {
        $path = base_path('.env');
        if (file_exists($path)) {
            file_put_contents($path, str_replace(
                $name . '=' . env($name), $name . '=' . $value, file_get_contents($path)
            ));
        }
    }


    function unique_code($limit)
    {
        return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
    }

    public function create()
    {
        $details = [
            'title' => 'moomen',
            'body' => 's.',
        ];
        Mail::to("mmsss875@gmail.com")->send(new TestEmail($details));
        return "email sent";
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
