@extends('emails.layout')

@section('content')

<div id="root" class="w-full"
    style="height: 90vh;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
    <header class="gradient"
        style="display:flex;align-items:center;justify-content:center;padding:14px;color: #f7fafc;font-size: 1.5rem;.gradient {background: #0f2027;background: -webkit-linear-gradient(to right,#2c5364,#203a43,#0f2027);background: linear-gradient(to right,#2c5364,#203a43,#0f2027);">
        <span style="font-weight:600;">DOL</span><span style="font-weight:300;margin-left:8px;">Logo Store</span>
    </header>
    <main
        style="display: flex;flex-flow: column nowrap;justify-content: center;align-items: center;background-color: #f7fafc;height: 50vh;">
        <div style="text-align:center;">
            <span
                style="display: inline-block;font-size: 1.8rem;font-weight: 200;font-style: italic;margin-bottom: 10px;text-align: center;">Thanks
                for registering!</span>
        </div>
        <a href="http://dol-store-laravel.test"><button
                style="padding: 8px 16px;font-size: 1.2rem;font-weight: 600;color: #f7fafc;border: none;outline: none;border-radius: 4px;margin: 0 auto;.gradient {background: #0f2027;background: -webkit-linear-gradient(to right,#2c5364,#203a43,#0f2027);background: linear-gradient(to right,#2c5364,#203a43,#0f2027);"
                class="gradient mx-auto">Start
                Shopping</button></a>
    </main>
    <footer class="gradient"
        style="display:flex;align-items:center;justify-content:center;padding:14px;color: #f7fafc;font-size: 0.8rem;.gradient {background: #0f2027;background: -webkit-linear-gradient(to right,#2c5364,#203a43,#0f2027);background: linear-gradient(to right,#2c5364,#203a43,#0f2027);">
        <span class="font-thin">DOL Logo Store 2020 All Rights Reserved.</span>
    </footer>
</div>

@endsection