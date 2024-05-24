import { BrowserRouter, Routes, Route } from 'react-router-dom';
import './App.css'
import SignIn from './auth/SignIn';
import SignUp from './auth/SignUp';
import Home from './finance/Home';

  const App: React.FC = () => (
    <BrowserRouter>
      <Routes>
        <Route path="/sign-in" element={<SignIn />} />
        <Route path="/sign-up" element={<SignUp />} />
        <Route path="/" element={<Home/>} />
      </Routes>
    </BrowserRouter>
  );


export default App
