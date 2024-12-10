<!DOCTYPE html>
<html>
<head>
    <title>Grazie per averci contattato</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="margin: 0; padding: 0; background-color: #f4f4f4; font-family: Arial, sans-serif; line-height: 1.6;">
    <div style="max-width: 600px; margin: 20px auto; background: #ffffff; border-radius: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); overflow: hidden;">
        <!-- Header -->
        <div style="background: #0d6efd; color: #ffffff; text-align: center; padding: 30px 20px;">
            <h1 style="margin: 0; font-size: 24px; font-weight: 600;">Grazie per averci contattato!</h1>
        </div>

        <!-- Content -->
        <div style="padding: 30px 20px;">
            <p style="margin-top: 0; font-size: 16px; color: #333333;">
                Gentile <strong>{{ $data['nome'] }}</strong>,
            </p>

            <p style="font-size: 16px; color: #333333;">
                Abbiamo ricevuto la tua richiesta e ti ringraziamo per averci contattato. Un membro del nostro team ti risponderà il prima possibile all'indirizzo email <strong>{{ $data['email'] }}</strong>.
            </p>

            <div style="background: #f8f9fa; border-radius: 8px; padding: 20px; margin: 25px 0;">
                <h2 style="margin-top: 0; font-size: 18px; color: #0d6efd;">Riepilogo della tua richiesta:</h2>

                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <td style="padding: 8px 0; color: #666666;">Oggetto:</td>
                        <td style="padding: 8px 0; color: #333333;"><strong>{{ $data['oggetto'] }}</strong></td>
                    </tr>
                    <tr>
                        <td style="padding: 8px 0; color: #666666;">Messaggio:</td>
                        <td style="padding: 8px 0; color: #333333;">{{ $data['messaggio'] }}</td>
                    </tr>
                    @if(isset($data['telefono']))
                    <tr>
                        <td style="padding: 8px 0; color: #666666;">Telefono:</td>
                        <td style="padding: 8px 0; color: #333333;">{{ $data['telefono'] }}</td>
                    </tr>
                    @endif
                </table>
            </div>

            <p style="font-size: 16px; color: #333333;">
                Se hai urgenza, puoi contattarci anche telefonicamente al numero:
                <strong style="color: #0d6efd;">+39 123 456 7890</strong>
            </p>

            <p style="font-size: 16px; color: #333333;">
                Cordiali saluti,<br>
                Il team di Padel Blog
            </p>
        </div>

        <!-- Footer -->
        <div style="background: #f8f9fa; padding: 20px; text-align: center; border-top: 1px solid #eeeeee;">
            <p style="margin: 0; font-size: 14px; color: #666666;">
                © 2024 Padel Blog. Tutti i diritti riservati.
            </p>
            <div style="margin-top: 15px;">
                <a href="#" style="color: #0d6efd; text-decoration: none; margin: 0 10px;">Facebook</a>
                <a href="#" style="color: #0d6efd; text-decoration: none; margin: 0 10px;">Instagram</a>
                <a href="#" style="color: #0d6efd; text-decoration: none; margin: 0 10px;">Twitter</a>
            </div>
        </div>
    </div>

    <!-- Additional Info -->
    <div style="max-width: 600px; margin: 20px auto; text-align: center; font-size: 12px; color: #666666;">
        <p>
            Questa email è stata inviata automaticamente in risposta al tuo messaggio.<br>
            Per favore non rispondere a questa email.
        </p>
    </div>
</body>
</html>