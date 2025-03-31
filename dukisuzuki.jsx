import './App.css'
import Book from './Components/Book';
import Subjects from './Components/Subjects';
function App() {
  const books = [
    {title: '1984', author: 'George Orwell', year: 1949},
    {title: 'To kill a mockingbird', author: 'Harper Lee', year: 1960},
    {title: 'The Great Gatsby', author: 'Fittzgerald', year: 1925},
  ]

  const predmet = [
    {ime: "Nikolina", predmet:"jsaib"},
    {ime: "Topić", predmet:"eng"},
    {ime: "Šolić", predmet:"hrv"}
  ]

  return (
    <>
    {books.map((book, index) =>
    <Book key={index} title={book.title} author={book.author} year={book.year}></Book>
    )}

    {predmet.map((sub, index1) =>
    <Subjects key={index1} ime={sub.ime} predmet={sub.predmet} ></Subjects>
    )}

    </>
  )
}

export default App

