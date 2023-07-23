import './App.css';
import YourComponent from './components/test';
import Header from './components/Header';
import StoreForm from './components/ProfileForm';
import Lara from './components/lara_test';
import { auth, provider } from "./firebase";
import { useAuthState } from "react-firebase-hooks/auth";
import { signInWithPopup } from "firebase/auth";


function App() {
  const [user, loading, error] = useAuthState(auth);

  const signIn = () => {
  signInWithPopup(auth, provider).catch((err) => alert(err.message));
          };


  return(
    <>
    <Header />
    < div className="app">
    {user ? (
    <YourComponent />
        ) : (
        <button onClick={signIn}>Sign in</button>
    )}
    </div>
    </>
    ); 

}

export default App;
