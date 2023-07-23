import { initializeApp, getApps } from "firebase/app";
import { getAuth } from "firebase/auth";
import { getFirestore } from "firebase/firestore";
import { GoogleAuthProvider } from "firebase/auth";

const firebaseConfig = {
    apiKey: "AIzaSyC6BLgO1rYpHI7CXZh3eatfQVKftw1nrHY",
    authDomain: "reactprisma.firebaseapp.com",
    projectId: "reactprisma",
    storageBucket: "reactprisma.appspot.com",
    messagingSenderId: "576980537716",
    appId: "1:576980537716:web:9c9eaca1c05d6945669c21"
};

const app = !getApps().length ? initializeApp(firebaseConfig) : getApps();
const auth = getAuth(app);
const db = getFirestore(app);
const provider = new GoogleAuthProvider();


export { auth, provider };
export default db;