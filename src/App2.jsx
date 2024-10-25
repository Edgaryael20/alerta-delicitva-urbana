
import LoginButton from './LoginButton.jsx';
import LogoutButton from './LogoutButton.jsx';
import { useContext } from 'react';
import { AuthContext } from './AuthContext.jsx';
import Aplicacion from "./App";
import logo from "./imagenes/hackaton.png"
let a = "";
function App() {

  const { isAuthenticated } = useContext(AuthContext);
  return (
    <>
      <div className='App-header'><img src={logo} width={50} height={50}></img> Alerta Delictiva Urbana
      <div className={a}><LogoutButton></LogoutButton></div></div>
     <div className='esconder'> {isAuthenticated ? a="":a="esconder" }</div>
      {isAuthenticated ? <Aplicacion></Aplicacion> : <LoginButton/>}
  
    </>
  );
}

export default App;