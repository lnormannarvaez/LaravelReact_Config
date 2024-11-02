import React  from "react";
import ReactDOM from 'react-dom/client';
import 'bootstrap/dist/css/bootstrap.min.css'

const App = () => {
 return  (
    <div>
        <h2>Prueba de Funcionalidad de React</h2>
        <button className="btn btn-primary">Prueba Enlace</button>
    </div>
 );
}

export default  App

if (document.getElementById('root')) {
    const Index = ReactDOM.createRoot(document.getElementById("root"));

    Index.render(
        <React.StrictMode>
            <App/>
        </React.StrictMode>
    )
}