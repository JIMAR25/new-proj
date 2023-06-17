// index.js

const express = require('express');
const axios = require('axios');
require('dotenv').config();

const app = express();
const PORT = process.env.PORT || 3001;

// Endpoint pour recevoir les nouvelles urgences
app.post('/urgence', (req, res) => {
  // Logique pour traiter la création d'une nouvelle urgence
  // ...

  // Envoyer la notification au client
  const notificationData = {
    userId: req.body.userId, // L'ID du client
    message: 'Une nouvelle urgence a été ajoutée.',
  };

  // Envoyer la notification en utilisant le service de messagerie de votre choix
  sendNotification(notificationData);

  res.sendStatus(200);
});

// Fonction pour envoyer la notification
function sendNotification(notificationData) {
  // Utilisez ici le service de messagerie de votre choix, par exemple :
  // - Envoyer une notification push
  // - Envoyer un e-mail
  // - Envoyer un SMS
  // - ...
  // Vous pouvez utiliser des bibliothèques externes ou des API pour effectuer l'envoi de notification.

  // Exemple d'utilisation d'Axios pour envoyer une notification push avec Firebase Cloud Messaging (FCM)
  axios.post('https://fcm.googleapis.com/fcm/send', {
    to: `/topics/user_${notificationData.userId}`,
    notification: {
      title: 'Nouvelle urgence',
      body: notificationData.message,
    },
  }, {
    headers: {
      'Authorization': `Bearer ${process.env.FCM_API_KEY}`,
      'Content-Type': 'application/json',
    },
  })
    .then(response => {
      console.log('Notification envoyée avec succès');
    })
    .catch(error => {
      console.error('Erreur lors de l\'envoi de la notification', error);
    });
}

// Démarrer le serveur
app.listen(PORT, () => {
  console.log(`Microservice de notifications en cours d'exécution sur le port ${PORT}`);
});
