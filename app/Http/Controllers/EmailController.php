<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $mailer = new PHPMailer(true);

        try {
            // Pengaturan SMTP
            $mailer->isSMTP();
            $mailer->Host = config('mail.host');
            $mailer->SMTPAuth = true;
            $mailer->Username = config('mail.username');
            $mailer->Password = config('mail.password');
            $mailer->SMTPSecure = config('mail.encryption');
            $mailer->Port = config('mail.port');

            // Penerima Email
            $toEmail = 'tujuan@email.com';
            $toName = 'Penerima';

            // Pengirim Email
            $fromEmail = 'pengirim@email.com';
            $fromName = 'Pengirim';

            $mailer->setFrom($fromEmail, $fromName);
            $mailer->addAddress($toEmail, $toName);

            // Subjek Email
            $mailer->Subject = 'Subjek Email';

            // Isi Email (HTML)
            $mailer->isHTML(true);
            $mailer->Body = '<p>Ini adalah email dengan desain CSS menarik.</p>';

            // Kirim Email
            $mailer->send();

            return "Email berhasil dikirim!";
        } catch (Exception $e) {
            return "Email gagal dikirim: {$mailer->ErrorInfo}";
        }
    }
}
