<div class="right-container" >
    <div class="section-heading">
        <h2>COLUMN CHARTS</h2>
        <h3><span>Home</span> / Charts</h3>
    </div>
    <div class="dashboard-grid-2col">
        <div class="col-1 panel-headings-left">
            <h3>CHART A</h3>
            <div class="chart-box">
            <form action="app/src/add-chart-data.php" method="post">
                <input type="number" name="score" min="1" max="100" required>
                <input type="submit" value="Submit">
            </form>
            <canvas id="mycanvas"></canvas>
            </div>
        </div>
    </div>
</div>