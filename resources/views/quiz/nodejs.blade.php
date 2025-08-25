@extends('layouts.app')

@section('content')
@if(Session::has('success_complate'))
<div class="d-flex justify-content-center">
    <div class="col-md-8 alert alert-success alert-dismissible text-center font-weight-bold mt-2 ml-0 radius" role="alert">
        {{ Session::get('success_complate') }}
    </div>
</div>
@endif
<div class="row">
    <div class="col-md-7 text-end">
        <h2>Nodejs Quiz</h2>
    </div>
    <div class="col-md-5">
        <div class="text-end">
            <a class="text-secondary m-5" href="{{ route('quiz') }}">back to quiz</a>
        </div>
    </div>
</div>

<div class="row" id="VueApp">
    <div class="col-md-12">
        <div>
            <form method="POST" action="{{ route('nodejsQuizAction') }}" enctype="multipart/form-data">
                @csrf
                <ol>
                    <li>What is the purpose of the package.json file in a Node.js project ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="nodejsQ1" value="nodejsQ1_1" v-model="selectedBootstrapssQ1"> It is required to run JavaScript files</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ1" value="nodejsQ1_2" v-model="selectedBootstrapssQ1"> It contains metadata about the project and its dependencies </li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ1" value="nodejsQ1_3" v-model="selectedBootstrapssQ1"> It contains the main application code </li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ1" value="nodejsQ1_4" v-model="selectedBootstrapssQ1"> It stores database configurations</li>
                    </ul>
                    <hr>
                    <li>What is the purpose of the app.use() method in Express.js ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="nodejsQ2" value="nodejsQ2_1" v-model="selectedBootstrapssQ2"> To mount middleware functions</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ2" value="nodejsQ2_2" v-model="selectedBootstrapssQ2"> To define route handlers</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ2" value="nodejsQ2_3" v-model="selectedBootstrapssQ2"> To send responses</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ2" value="nodejsQ2_4" v-model="selectedBootstrapssQ2"> To handle errors</li>
                    </ul>
                    <hr>
                    <li>What is the purpose of the require() function in Node.js ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="nodejsQ3" value="nodejsQ3_1" v-model="selectedBootstrapssQ3"> To include modules that exist in separate files  </li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ3" value="nodejsQ3_2" v-model="selectedBootstrapssQ3"> To validate user input</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ3" value="nodejsQ3_3" v-model="selectedBootstrapssQ3"> To make HTTP requests</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ3" value="nodejsQ3_4" v-model="selectedBootstrapssQ3"> To include CSS files</li>
                    </ul>
                    <hr>
                    <li>How do you include the HTTP module in a Node.js file ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="nodejsQ4" value="nodejsQ4_1" v-model="selectedBootstrapssQ4"> using http;</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ4" value="nodejsQ4_2" v-model="selectedBootstrapssQ4"> import http module from 'http module'</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ4" value="nodejsQ4_3" v-model="selectedBootstrapssQ4"> include http;</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ4" value="nodejsQ4_4" v-model="selectedBootstrapssQ4"> const http = require('http')</li>
                    </ul>
                    <hr>
                    <li>Which of the following is NOT a valid way to read environment variables in Node.js ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="nodejsQ5" value="nodejsQ5_1" v-model="selectedBootstrapssQ5"> process.env.VARIABLE_NAME</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ5" value="nodejsQ5_2" v-model="selectedBootstrapssQ5"> const { VARIABLE_NAME } = process.env</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ5" value="nodejsQ5_3" v-model="selectedBootstrapssQ5"> process.getEnv('VARIABLE_NAME')</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ5" value="nodejsQ5_4" v-model="selectedBootstrapssQ5"> process.env['VARIABLE_NAME']</li>
                    </ul>
                    <hr>
                    <li>Which method is used to parse JSON data in Node.js ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="nodejsQ6" value="nodejsQ6_1" v-model="selectedBootstrapssQ6"> JSON.stringify()</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ6" value="nodejsQ6_2" v-model="selectedBootstrapssQ6"> JSON.parse()</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ6" value="nodejsQ6_3" v-model="selectedBootstrapssQ6"> JSON.decode()</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ6" value="nodejsQ6_4" v-model="selectedBootstrapssQ6"> JSON.encode()</li>
                    </ul>
                    <hr>
                    <li>What is the purpose of the crypto module in Node.js ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="nodejsQ7" value="nodejsQ7_1" v-model="selectedBootstrapssQ7"> To provide cryptographic functionality</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ7" value="nodejsQ7_2" v-model="selectedBootstrapssQ7"> To handle database connections</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ7" value="nodejsQ7_3" v-model="selectedBootstrapssQ7"> To validate user input</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ7" value="nodejsQ7_4" v-model="selectedBootstrapssQ7"> To manage file uploads</li>
                    </ul>
                    <hr>
                    <li>Which method is used to read environment variables from a .env file ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="nodejsQ8" value="nodejsQ8_1" v-model="selectedBootstrapssQ8"> process.env.load()</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ8" value="nodejsQ8_2" v-model="selectedBootstrapssQ8"> process.loadEnv()</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ8" value="nodejsQ8_3" v-model="selectedBootstrapssQ8"> require('dotenv').config()</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ8" value="nodejsQ8_4" v-model="selectedBootstrapssQ8"> process.config()</li>
                    </ul>
                    <hr>
                    <li>Which method is used to create an HTTP server in Node.js ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="nodejsQ9" value="nodejsQ9_1" v-model="selectedBootstrapssQ9"> http.newServer()</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ9" value="nodejsQ9_2" v-model="selectedBootstrapssQ9"> http.server()</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ9" value="nodejsQ9_3" v-model="selectedBootstrapssQ9"> http.startServer()</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ9" value="nodejsQ9_4" v-model="selectedBootstrapssQ9"> http.createServer()</li>
                    </ul>
                    <hr>
                    <li>NPM is a</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="nodejsQ10" value="nodejsQ10_1" v-model="selectedBootstrapssQ10"> Web development framework</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ10" value="nodejsQ10_2" v-model="selectedBootstrapssQ10"> Database system</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ10" value="nodejsQ10_3" v-model="selectedBootstrapssQ10"> Programming language</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ10" value="nodejsQ10_4" v-model="selectedBootstrapssQ10"> Package Manager</li>
                    </ul>
                    <hr>
                    <li>Which module would you use to create a child process in Node.js ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="nodejsQ11" value="nodejsQ11_1" v-model="selectedBootstrapssQ11"> process</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ11" value="nodejsQ11_2" v-model="selectedBootstrapssQ11"> child_process</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ11" value="nodejsQ11_3" v-model="selectedBootstrapssQ11"> os</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ11" value="nodejsQ11_4" v-model="selectedBootstrapssQ11"> http</li>
                    </ul>
                    <hr>
                    <li>Which of the following is NOT a valid stream event in Node.js ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="nodejsQ12" value="nodejsQ12_1" v-model="selectedBootstrapssQ12"> complete</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ12" value="nodejsQ12_2" v-model="selectedBootstrapssQ12"> error</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ12" value="nodejsQ12_3" v-model="selectedBootstrapssQ12"> end</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ12" value="nodejsQ12_4" v-model="selectedBootstrapssQ12"> data</li>
                    </ul>
                    <hr>
                    <li>How do you access query parameters in an Express.js ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="nodejsQ13" value="nodejsQ13_1" v-model="selectedBootstrapssQ13"> req.param</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ13" value="nodejsQ13_2" v-model="selectedBootstrapssQ13"> req.query</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ13" value="nodejsQ13_3" v-model="selectedBootstrapssQ13"> req.body</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ13" value="nodejsQ13_4" v-model="selectedBootstrapssQ13"> req.params</li>
                    </ul>
                    <hr>
                    <li>Which method is used to redirect a response in Express.js ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="nodejsQ14" value="nodejsQ14_1" v-model="selectedBootstrapssQ14"> res.to()</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ14" value="nodejsQ14_2" v-model="selectedBootstrapssQ14"> res.forward()</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ14" value="nodejsQ14_3" v-model="selectedBootstrapssQ14"> res.redirect()</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ14" value="nodejsQ14_4" v-model="selectedBootstrapssQ14"> res.go()</li>
                    </ul>
                    <hr>
                    <li>What is the purpose of the path.join() method in Node.js ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="nodejsQ15" value="nodejsQ15_1" v-model="selectedBootstrapssQ15"> To join multiple path segments into a single path</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ15" value="nodejsQ15_2" v-model="selectedBootstrapssQ15"> To get the file extension from a path</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ15" value="nodejsQ15_3" v-model="selectedBootstrapssQ15"> To split a path into segments</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ15" value="nodejsQ15_4" v-model="selectedBootstrapssQ15"> To resolve a path to an absolute path</li>
                    </ul>
                    <hr>
                    <li>Which method is used to read a file synchronously in Node.js ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="nodejsQ16" value="nodejsQ16_1" v-model="selectedBootstrapssQ16"> fs.readFile()</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ16" value="nodejsQ16_2" v-model="selectedBootstrapssQ16"> fs.readAsync()</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ16" value="nodejsQ16_3" v-model="selectedBootstrapssQ16"> fs.read()</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ16" value="nodejsQ16_4" v-model="selectedBootstrapssQ16"> fs.readFileSync()</li>
                    </ul>
                    <hr>
                    <li>What is the purpose of the node_modules folder ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="nodejsQ17" value="nodejsQ17_1" v-model="selectedBootstrapssQ17"> It contains the Node.js source code</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ17" value="nodejsQ17_2" v-model="selectedBootstrapssQ17"> It holds temporary files</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ17" value="nodejsQ17_3" v-model="selectedBootstrapssQ17"> It contains all the installed dependencies</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ17" value="nodejsQ17_4" v-model="selectedBootstrapssQ17"> It stores user configuration files</li>
                    </ul>
                    <hr>
                    <li>Which method is used to handle GET requests in Express.js ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="nodejsQ18" value="nodejsQ18_1" v-model="selectedBootstrapssQ18"> app.delete()</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ18" value="nodejsQ18_2" v-model="selectedBootstrapssQ18"> app.put()</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ18" value="nodejsQ18_3" v-model="selectedBootstrapssQ18"> app.post()</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ18" value="nodejsQ18_4" v-model="selectedBootstrapssQ18"> app.get()</li>
                    </ul>
                    <hr>
                    <li>Which of the following best describes the architecture of Node.js ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="nodejsQ19" value="nodejsQ19_1" v-model="selectedBootstrapssQ19"> Multi-threaded, event-driven</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ19" value="nodejsQ19_2" v-model="selectedBootstrapssQ19"> Single-threaded, event-driven</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ19" value="nodejsQ19_3" v-model="selectedBootstrapssQ19"> Multi-threaded, user-driven </li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ19" value="nodejsQ19_4" v-model="selectedBootstrapssQ19"> Single-threaded, session-driven</li>
                    </ul>
                    <hr>
                    <li>Which of the following is NOT a valid HTTP method in Node.js ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="nodejsQ20" value="nodejsQ20_1" v-model="selectedBootstrapssQ20"> GET</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ20" value="nodejsQ20_2" v-model="selectedBootstrapssQ20"> DELETE</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ20" value="nodejsQ20_3" v-model="selectedBootstrapssQ20"> POST</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ20" value="nodejsQ20_4" v-model="selectedBootstrapssQ20"> UPDATE</li>
                    </ul>
                    <hr>
                    <li>The Node.js Event Loop is responsible for making Node.js:</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="nodejsQ21" value="nodejsQ21_1" v-model="selectedBootstrapssQ21"> Inefficient and slow</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ21" value="nodejsQ21_2" v-model="selectedBootstrapssQ21"> Asynchronous but slow</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ21" value="nodejsQ21_3" v-model="selectedBootstrapssQ21"> Non-blocking and efficient </li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ21" value="nodejsQ21_4" v-model="selectedBootstrapssQ21"> Synchronous and blocking</li>
                    </ul>
                    <hr>
                    <li>What is the purpose of the events module in Node.js ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="nodejsQ22" value="nodejsQ22_1" v-model="selectedBootstrapssQ22"> To handle and create custom events</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ22" value="nodejsQ22_2" v-model="selectedBootstrapssQ22"> To work with the file system</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ22" value="nodejsQ22_3" v-model="selectedBootstrapssQ22"> To manage database connections</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ22" value="nodejsQ22_4" v-model="selectedBootstrapssQ22"> To handle HTTP requests and responses</li>
                    </ul>
                    <hr>
                    <li>Which command is used to install all dependencies listed in package.json ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="nodejsQ23" value="nodejsQ23_1" v-model="selectedBootstrapssQ23"> npm install</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ23" value="nodejsQ23_2" v-model="selectedBootstrapssQ23"> npm update</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ23" value="nodejsQ23_3" v-model="selectedBootstrapssQ23"> npm init</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ23" value="nodejsQ23_4" v-model="selectedBootstrapssQ23"> npm start</li>
                    </ul>
                    <hr>
                    <li>Which module would you use to work with file paths in a cross-platform way ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="nodejsQ24" value="nodejsQ24_1" v-model="selectedBootstrapssQ24"> os</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ24" value="nodejsQ24_2" v-model="selectedBootstrapssQ24"> path</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ24" value="nodejsQ24_3" v-model="selectedBootstrapssQ24"> url</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ24" value="nodejsQ24_4" v-model="selectedBootstrapssQ24"> fs</li>
                    </ul>
                    <hr>
                    <li>What is the purpose of the util.promisify() method in Node.js ?</li>
                    <ul style="list-style-type:none">
                        <li><input class="form-check-input" type="radio" name="nodejsQ25" value="nodejsQ25_1" v-model="selectedBootstrapssQ25"> To measure function execution time</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ25" value="nodejsQ25_2" v-model="selectedBootstrapssQ25"> To validate function parameters</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ25" value="nodejsQ25_3" v-model="selectedBootstrapssQ25"> To create utility functions</li>
                        <li><input class="form-check-input" type="radio" name="nodejsQ25" value="nodejsQ25_4" v-model="selectedBootstrapssQ25"> To convert callback-based functions to Promises</li>
                    </ul>
                </ol>
                <hr>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Finish</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
