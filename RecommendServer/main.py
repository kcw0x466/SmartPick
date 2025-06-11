from fastapi import FastAPI, Request, Form
from fastapi.templating import Jinja2Templates
from fastapi.responses import HTMLResponse, JSONResponse
from pymongo import MongoClient
from product_recommend import recommend

app = FastAPI()
templates = Jinja2Templates(directory="templates")

client = MongoClient("mongodb://localhost:27017")
db = client["smartpick"]

class MongoJSONEncoder:
    @staticmethod
    def transform(doc):
        doc["_id"] = str(doc["_id"])
        return doc

@app.get("/survey", response_class=HTMLResponse)
def survey(request: Request):
    return templates.TemplateResponse("survey.html", {"request": request})

@app.get("/survey/pc", response_class=HTMLResponse)
def survey_pc(request: Request):
    return templates.TemplateResponse("survey_pc.html", {"request": request})

@app.get("/survey/laptop", response_class=HTMLResponse)
def survey_laptop(request: Request):
    return templates.TemplateResponse("survey_laptop.html", {"request": request})

@app.get("/survey/tv", response_class=HTMLResponse)
def survey_tv(request: Request):
    return templates.TemplateResponse("survey_tv.html", {"request": request})

@app.get("/survey/washingmachine", response_class=HTMLResponse)
def survey_washer(request: Request):
    return templates.TemplateResponse("survey_washing_machine.html", {"request": request})


@app.post("/request/test")
async def testRequest(
    budget: int = Form(...),      
    screen_size: int = Form(...),       
    screen_resolution: int = Form(...),
    refresh_rate: int = Form(...),
    ports: int = Form(...)  
):
    user_vector = [budget, screen_size, screen_resolution, refresh_rate, ports]

    return JSONResponse(content={
        "user_vector": user_vector
    })

@app.post("/recommend/pc", response_class=HTMLResponse)
async def recommend_pc(
    budget: int = Form(...),      
    cpu: int = Form(...),            
    ram: int = Form(...),           
    gpu: int = Form(...),            
    storage: int = Form(...),     
    request: Request = None
):
    user_vector = [budget, cpu, ram, gpu, storage]
    collection = db["products_PC"]
    products_cursor = collection.find()
    products = [MongoJSONEncoder.transform(doc) for doc in products_cursor]
    recommand_products = recommend(user_vector, products)
    return templates.TemplateResponse("recommend_result.html", {"request": request, "results": recommand_products, "category": "products_PC", "cat_img": "computer"})

@app.post("/recommend/notebook", response_class=HTMLResponse)
async def recommend_notebook(
    budget: int = Form(...),      
    cpu_score: int = Form(...),           
    ram: int = Form(...),          
    gpu_score: int = Form(...),           
    storage: int = Form(...),     
    inch: float = Form(...),
    resolution: int = Form(...),
    refresh_rate: int = Form(...),
    weight: int = Form(...),
    battery: int = Form(...),
    request: Request = None
):
    user_vector = [budget, cpu_score, ram, gpu_score, storage, inch, resolution, refresh_rate, weight, battery]
    collection = db["products_laptop"]
    products_cursor = collection.find()
    products = [MongoJSONEncoder.transform(doc) for doc in products_cursor]
    recommand_products = recommend(user_vector, products)
    return templates.TemplateResponse("recommend_result.html", {"request": request, "results": recommand_products, "category": "products_laptop", "cat_img": "laptop"})

@app.post("/recommend/tv", response_class=HTMLResponse)
async def recommend_tv(
    budget: int = Form(...),      
    screen_size: int = Form(...),       
    screen_resolution: int = Form(...),
    refresh_rate: int = Form(...),
    ports: int = Form(...),    
    request: Request = None
):
    user_vector = [budget, screen_size, screen_resolution, refresh_rate, ports]
    collection = db["products_TV"]
    products_cursor = collection.find()
    products = [MongoJSONEncoder.transform(doc) for doc in products_cursor]
    recommand_products = recommend(user_vector, products)
    return templates.TemplateResponse("recommend_result.html", {"request": request, "results": recommand_products, "category": "products_TV", "cat_img": "tv"})

@app.post("/recommend/washingmachine", response_class=HTMLResponse)
async def recommend_washer(
    budget: int = Form(...),      
    capacity: int = Form(...),       
    washing_type: int = Form(...),
    dry_function: int = Form(...),
    energy_rating: int = Form(...),
    noise: int = Form(...),
    request: Request = None  
):
    user_vector = [budget, capacity, washing_type, dry_function, energy_rating, noise]
    collection = db["products_WashingMachine"]
    products_cursor = collection.find()
    products = [MongoJSONEncoder.transform(doc) for doc in products_cursor]
    recommand_products = recommend(user_vector, products)
    return templates.TemplateResponse("recommend_result.html", {"request": request, "results": recommand_products, "category": "products_WashingMachine", "cat_img": "washer"})

@app.get("/")
def read_root():
    return {"message": "Hello, World!"}
