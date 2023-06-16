require('dotenv').config();
const express = require('express');
const nodemailer = require('nodemailer');

const app = express();
app.use(express.json());

app.post('/donation', (req, res) => {
    const { donorName, donorEmail, donationAmount } = req.body;

    // Configurer le transporteur d'e-mail
    const transporter = nodemailer.createTransport({
        service: 'gmail',
        auth: {
            user: process.env.EMAIL_ADDRESS,
            pass: process.env.EMAIL_PASSWORD
        }
    });

    // Créer le contenu de l'e-mail
    const mailOptions = {
        from: process.env.EMAIL_ADDRESS,
        to: donorEmail,
        subject: 'Confirmation de don',
        text: `Cher ${donorName},\n\nMerci pour votre don de ${donationAmount} EUR. Nous apprécions votre soutien.\n\nCordialement,\nVotre organisation`
    };
    

    // Envoyer l'e-mail
    transporter.sendMail(mailOptions, (error, info) => {
        if (error) {
            console.log('Erreur lors de l\'envoi de l\'e-mail:', error);
            res.status(500).json({ error: 'Une erreur s\'est produite lors de l\'envoi de l\'e-mail' });
        } else {
            console.log('E-mail envoyé:', info.response);
            res.status(200).json({ message: 'E-mail envoyé avec succès' });
        }
    });
});

const port = 3000;
app.listen(port, () => {
    console.log(`Microservice d'envoi d'e-mails pour les dons écoute sur le port ${port}`);
});