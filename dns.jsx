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
<<<<<<< HEAD
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
=======
      <Router>
        <nav>
          <Link to="/"> Semafor </Link>
          <Link to="/popisIgraca"> Popis igraca </Link>
          <Link to="/raspored/Osijek"> Raspored osijek </Link>
          <Link to="/raspored/Osijek"> Raspored osijek </Link>
        </nav>
        <Routes>
          <Route path="/" element={<Semafor />}></Route>
          <Route path="/about" element={<Igrac />}></Route>
          <Route path="/raspored/:klub" element={<Raspored />}></Route>

        </Routes>
      </Router>
>>>>>>> 5cd53e6adc2f16d4336271ae24e926b292fab103


    </>
  )
}

export default App
