import React, { useState } from 'react';

const App = () => {
  const [curruncy, setCurruncy] = useState(0);

  function convertHandler() {
    const convertedAmount = parseInt(curruncy) * 80;
    setCurruncy(convertedAmount);
  }

  return (
    <div>
      <label htmlFor='amt'>Enter Amount:</label>
      <input
        name='amt'
        id='amt'
        value={curruncy}
        onChange={(e) => setCurruncy(e.target.value)}
      ></input>
      <button onClick={convertHandler}>Convert</button>

      <h4>Amount in Dollar:</h4>
      <p>{curruncy}</p>
    </div>
  );
}

export default App;
