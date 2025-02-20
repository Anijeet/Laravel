<div>
    <form action="addUser" method="post">
        @csrf
        <div>
            <input type="checkbox" name="skill[]" value="PHP" id="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]" value="Node" id="node">
            <label for="node">Node</label>
        </div>
        <div>
            <input type="radio" name="gender" value="Male" id="male">
            <label for="male">male</label>
            <input type="radio" name="gender" value="Female" id="female">
            <label for="female">female</label>
        </div>

        <div>
            <h1>Dropdown</h1>
            <br>
            <select name="country" id="country">
                <option value="USA">USA</option>
                <option value="UK">UK</option>
                <option value="Australia">Australia</option>
            </select>
        </div>
        <div>
            <h1>Age range</h1>
            <br>
            <input type="range" name="age" min='18' max='52' >
        </div>
            <br>
        <div>
            <button>Submit</button>
        </div>
    </form>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
</div>
