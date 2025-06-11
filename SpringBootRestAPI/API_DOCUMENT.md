
# 📘 Graduation Work API 문서

> Base URL: `/` (기본값, 실제 배포시 경로 변경 가능)

---

## 📦 제품(Product) API

### 🔹 [POST] /products/add
- **설명**: 단일 상품 등록
- **Request Body**:
```json
{
  "name": "상품명",
  "price": 100000,
  "category": "노트북",
  "description": "고성능 게임용 노트북",
  ...
}
```
- **Response**:
```json
"Product added successfully"
```

---

### 🔹 [POST] /products/add-multiple
- **설명**: 복수 상품 일괄 등록
- **Request Body**: ProductDto 리스트

---

### 🔹 [DELETE] /products/{id}
- **설명**: 상품 삭제

---

### 🔹 [GET] /products/search
- **설명**: 키워드/카테고리/가격/평점 기반 상품 검색
- **Query Params**:
  - keyword, category, minPrice, maxPrice, minRating

---

### 🔹 [GET] /products/compare
- **설명**: 여러 상품 ID를 받아 비교
- **Query Params**:
  - ids: Long 배열

---

## 👤 인증(Auth) API

### 🔹 [POST] /auth/signup
- **설명**: 회원가입
- **Request Body**:
```json
{
  "email": "user@example.com",
  "password": "pw1234",
  "nickname": "홍길동"
}
```

---

### 🔹 [POST] /auth/login
- **설명**: 로그인
- **Request Body**:
```json
{
  "email": "user@example.com",
  "password": "pw1234"
}
```

- **Response**: JWT 토큰 및 사용자 정보

---

## 🛒 장바구니(Cart) API

### 🔹 [POST] /cart/add
- **설명**: 상품 장바구니 추가

### 🔹 [GET] /cart
- **설명**: 장바구니 전체 조회

### 🔹 [DELETE] /cart/{cartItemId}
- **설명**: 장바구니 아이템 삭제

---

## 📦 주문(Order) API

### 🔹 [POST] /order
- **설명**: 주문 생성

### 🔹 [GET] /order
- **설명**: 사용자 주문 내역 조회

