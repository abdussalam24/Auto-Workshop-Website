// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.2/firebase-app.js";
import { getFirestore } from 'https://www.gstatic.com/firebasejs/10.12.2/firebase-firestore.js'

// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyDUVz-SgdUIlXorKrr8WZ5jzCmBKcf9zm4",
  authDomain: "auto-workshop-faf09.firebaseapp.com",
  projectId: "auto-workshop-faf09",
  storageBucket: "auto-workshop-faf09.appspot.com",
  messagingSenderId: "697838781321",
  appId: "1:697838781321:web:9182dbad6c2699aa1c5758",
  measurementId: "G-4TN02WMYRH"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);

const db = getFirestore(app);

export { app , db }
