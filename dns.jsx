import { useState } from 'react';
import Semafor from "./components/Semafor";
import Igrac from "./components/Igrac";

import './App.css'
import { BrowserRouter as Router, Routes, Route, Link } from 'react-router-dom';
import RasporedDinamo from './components/rasporedDinamo';
import RasporedHajduk from './components/rasporedHajduk';

function App() {

  return (
    

    <>
  <Router>
    <nav>
      <Link to="/"> Semafor </Link>
      <Link to="/popisIgraca"> Popis igraca </Link>
      <Link to="/raspored/Rijeka"> Raspored Rijeka </Link>
      <Link to="/raspored/Rijeka"> Raspored Rijeka </Link>
    </nav>
    <Routes>
      <Route path="/" element={<Semafor/>}></Route>
      <Route path="/about" element={<Igrac/>}></Route>
      <Route path="/raspored/:klub" element={<Raspored/>}></Route>

    </Routes>
  </Router>

   
    </>
  )
}

export default App
