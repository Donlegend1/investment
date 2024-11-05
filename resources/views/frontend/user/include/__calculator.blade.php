 <div style="max-width: 100%; margin: 0 auto;">
  <h2>Staking Plan Calculator</h2>
  <label for="investment">Enter your Staking  amount ($50 - $1000000):</label>
  <input type="number" id="investment" min="50" max="1000000" step="1" required style="width: 100%; padding: 10px; margin-bottom: 10px; box-sizing: border-box;"><br>
  <button onclick="calculate()" style="width: 100%; padding: 10px; background-color: #0dc9c9; color: white; border: none; cursor: pointer;">Calculate</button>
  <br><br>
  <a href="schema-preview/1" style="text-decoration: none;">
  <button style="width: 100%; padding: 10px; background-color: #0dc9c9; color: white; border: none; cursor: pointer;">Stake</button>
</a>

  <div id="result" style="margin-top: 20px; padding: 10px; border: 1px solid #ccc;">
    <!-- Results will be displayed here -->
  </div>
</div>
<br><br><br>