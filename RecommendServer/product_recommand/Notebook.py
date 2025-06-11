import json
import numpy as np
from sklearn.neighbors import NearestNeighbors
from sklearn.preprocessing import MinMaxScaler

# 1. 사용자 설문 응답 받아서 벡터 변환
def get_user_vector():
    print("==== 노트북 추천을 위한 간단한 설문에 응해주세요 ====\n")

    print("1. 주요 사용 목적은?")
    print(" 1) 문서작업 및 인터넷")
    print(" 2) 영상 시청 및 인기 온라인 게임(롤, 오버워치, 발로란트 등)")
    print(" 3) 고사양 게임(스팀 게임, 패키지 게임)")
    print(" 4) 영상 편집 / 3D 작업 / 그래픽 작업")
    print(" 5) 인공지능/ 데이터 분석 등")
    purpose = int(input(">> "))

    print("\n2. 예산은 어느 정도? (입력한 예산과 가까운 금액의 제품을 찾아드립니다.)")
    budget = int(input(">> "))

    print("\n3. 파일 저장 공간이 얼마나 필요하신가요?")
    print(" 1) 기본적인 문서와 사진만 저장 (256GB 이하)")
    print(" 2) 문서, 사진, 음악, 동영상 저장 (512GB)")
    print(" 3) 대용량 파일 저장과 인기 온라인 게임 설치 (1TB)")
    print(" 4) 대용량 파일 저장과 패키지 게임 설치 (2TB) ")
    storage_choice = int(input(">> "))

    print("\n4. 선호하는 화면 크기?")
    print(" 1) 작은 화면")
    print(" 2) 보통 화면")
    print(" 3) 넓은 화면")
    inch_choice = int(input(">> "))

    print("\n5. 고화질 화면이 필요하거나 화면에 창을 많이 띄우시나요?")
    print(" 1) 상관없음")
    print(" 2) 보통")
    print(" 3) 그렇다")
    print(" 4) 매우 그렇다")
    resolution_choice = int(input(">> "))

    print("\n6. 부드러운 화면 움직임을 원하시나요?")
    print(" 1) 상관없음")
    print(" 2) 보통")
    print(" 3) 그렇다")
    print(" 4) 매우 그렇다")
    refresh_rate_choice = int(input(">> "))

    print("\n7. 노트북을 많이 휴대하시는지?")
    print(" 1) 그렇지 않다")
    print(" 2) 보통")
    print(" 3) 그렇다")
    print(" 4) 매우 그렇다")
    weight_choice = int(input(">> "))

    print("\n8. 노트북으로 외부에 작업을 많이 하시는지?")
    print(" 1) 그렇지 않다")
    print(" 2) 보통")
    print(" 3) 그렇다")
    print(" 4) 매우 그렇다")
    battery_choice = int(input(">> "))


    # === 현실적인 벤치마크 점수 맵 ===
    cpu_map = {
        1: 15000,   # 문서작업용 (i5-1334U, Ryzen 5 5500U 수준)
        2: 25000,   # 영상/가벼운 게임용 (i7-12700H, Ryzen 7 7735HS 수준)
        3: 35000,   # 고사양 게임용 (Ryzen 9 7940HS, i9-13900H 수준)
        4: 45000,   # 영상편집 / 3D (i9-13980HX, Ryzen AI 9 HX 370 수준)
        5: 57000    # AI/데이터 분석 (Intel Core Ultra 9 275HX 수준)
    }

    gpu_map = {
        1: 3000,    # 내장그래픽 (Intel UHD Graphics, AMD Radeon Graphics 수준)
        2: 12000,   # 중저가 GPU (RTX 2050, Intel Arc 130T 수준)
        3: 20000,   # 고성능 GPU (RTX 4070, Apple M3 Pro 수준)
        4: 28000,   # 영상편집/딥러닝 적합 (RTX 4080, Apple M4 Pro 수준)
        5: 34000    # 최고급 AI 연산용 (Apple M3 Max 수준)
    }

    ram_map = [8, 16, 32, 64, 128]  # 멀티태스킹 수준 → RAM 용량 추정

    inch_map = [13.5, 15.5, 17.5]

    resolution_map = [1100, 1600, 1850, 2000]

    refresh_rate_map = [60, 120, 160, 240]

    weight_map = [3000 ,2000, 1000, 500]

    battery_map = [40000, 60000, 80000, 100000]

    storage_map = [256, 512, 1024, 2048, 4096]

    cpu_score = cpu_map[purpose]
    gpu_score = gpu_map[purpose]
    ram = ram_map[purpose - 1]
    inch = inch_map[inch_choice - 1]
    resolution = resolution_map[resolution_choice - 1]
    refresh_rate = refresh_rate_map[refresh_rate_choice - 1]
    weight = weight_map[weight_choice - 1]
    battery = battery_map[battery_choice - 1]
    storage = storage_map[storage_choice - 1]

    return [budget, cpu_score, ram, gpu_score, storage, inch, resolution, refresh_rate, weight, battery]


# 2. 제품 데이터 로드
def load_products(filename):
    with open(filename, 'r', encoding='utf-8') as f:
        return json.load(f)
    
# 3. KNN 추천 함수
def recommend(user_vector, products, k=3):
    vectors = np.array([prod["vector"] for prod in products])

    # 특성 표준화
    scaler = MinMaxScaler()
    vectors_scaled = scaler.fit_transform(vectors)

    # KNN 모델 훈련
    model = NearestNeighbors(n_neighbors=k, metric='euclidean')
    model.fit(vectors_scaled)

    user_vector_scaled = scaler.transform(np.array([user_vector]))
    distances, indices = model.kneighbors(user_vector_scaled)

    print("\n==== 당신에게 추천하는 제품 TOP 3 ====\n")
    for i, idx in enumerate(indices[0]):
        p = products[idx]
        print(f"[{i+1}위] {p['name']}")
        print(f" - 가격: {p['price']}원")
        print(f" - CPU 점수: {p['spec']['CPU']}")
        print(f" - RAM: {p['spec']['RAM']}GB")
        print(f" - GPU 점수: {p['spec']['GPU']}")
        print(f" - 화면크기: {p['spec']['display_inch']}")
        print(f" - 해상도: {p['spec']['display_resolution']}")
        print(f" - 주사율: {p['spec']['refresh_rate']}")
        print(f" - 무게: {p['spec']['weight']}")
        print(f" - 배터리: {p['spec']['battery_life']}\n")

# 4. 실행 흐름
if __name__ == "__main__":
    products = load_products("notebook_specs_with_vectors.json")
    user_vector = get_user_vector()
    recommend(user_vector, products)