import { useContext } from 'react';
import { AuthContext } from './AuthContext.jsx';
import "./Content.css"
import "./App.css"

let a = "";

function Redirigir(){
  location.href = 'http://localhost/AlertaDelictivaUrbana/Altas/altas_reporte_front.php';

}
function App() {

  const { isAuthenticated } = useContext(AuthContext);
  return (
    <>
      
     <div className='esconder'> {isAuthenticated ? Redirigir():a="esconder" }</div>
   
  
    </>
  );
}

export default App;
