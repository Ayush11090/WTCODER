import {useState} from 'react';
import './App.css';

function App() {
  const[units, setUnits] = useState('');
  const[bill, setBill] = useState(null);
  function calculateBill(){
    var total =0;
    const unitsValue = parseFloat(units);
    if(units <100){
      total += unitsValue*5;
      setBill(total);
    }
    else if(units>100 && units<300){
      total += 100*5;
      total += (unitsValue-100)*7;
      setBill(total);
    }
    else{
      total += 100*5;
      total += 200*5;
      total+= (unitsValue - 300)*10;
      setBill(total);
    }
    
  }
  return (
    
    
    <div>
      <h1>Electricty Bill Generator</h1>
      <label htmlfor="input">Enter Units:</label>
        <input type="text" id="input" name="input" value={units} onChange={(e) => setUnits(e.target.value)}></input>
        <button onClick={calculateBill}>Generate Bill</button>

        <h2>Bill Details</h2>
          <p>Total Units: {units}</p>
          <p>Total Bill: {bill}</p>
      
    </div>
  );
}

export default App;
