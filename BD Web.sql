--
-- PostgreSQL database dump
--

-- Dumped from database version 13.9 (Debian 13.9-0+deb11u1)
-- Dumped by pg_dump version 13.9 (Debian 13.9-0+deb11u1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: categorias; Type: TABLE; Schema: public; Owner: tdiw-k1
--

CREATE TABLE public.categorias (
    category_id integer NOT NULL,
    name character varying(25),
    image character varying(100)
);


ALTER TABLE public.categorias OWNER TO "tdiw-k1";

--
-- Name: categorias_category_id_seq; Type: SEQUENCE; Schema: public; Owner: tdiw-k1
--

CREATE SEQUENCE public.categorias_category_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.categorias_category_id_seq OWNER TO "tdiw-k1";

--
-- Name: categorias_category_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: tdiw-k1
--

ALTER SEQUENCE public.categorias_category_id_seq OWNED BY public.categorias.category_id;


--
-- Name: linea_pedido; Type: TABLE; Schema: public; Owner: tdiw-k1
--

CREATE TABLE public.linea_pedido (
    id integer NOT NULL,
    nombre_producto character varying,
    cantidad integer,
    precio_unitario real,
    precio_total real
);


ALTER TABLE public.linea_pedido OWNER TO "tdiw-k1";

--
-- Name: pedidos; Type: TABLE; Schema: public; Owner: tdiw-k1
--

CREATE TABLE public.pedidos (
    pedido_id integer NOT NULL,
    date date,
    total_products integer,
    total_import money,
    user_id integer NOT NULL
);


ALTER TABLE public.pedidos OWNER TO "tdiw-k1";

--
-- Name: pedidos_pedido_id_seq; Type: SEQUENCE; Schema: public; Owner: tdiw-k1
--

CREATE SEQUENCE public.pedidos_pedido_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.pedidos_pedido_id_seq OWNER TO "tdiw-k1";

--
-- Name: pedidos_pedido_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: tdiw-k1
--

ALTER SEQUENCE public.pedidos_pedido_id_seq OWNED BY public.pedidos.pedido_id;


--
-- Name: pedidos_user_id_seq; Type: SEQUENCE; Schema: public; Owner: tdiw-k1
--

CREATE SEQUENCE public.pedidos_user_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.pedidos_user_id_seq OWNER TO "tdiw-k1";

--
-- Name: pedidos_user_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: tdiw-k1
--

ALTER SEQUENCE public.pedidos_user_id_seq OWNED BY public.pedidos.user_id;


--
-- Name: producto; Type: TABLE; Schema: public; Owner: tdiw-k1
--

CREATE TABLE public.producto (
    product_id integer NOT NULL,
    name character varying,
    category_id integer NOT NULL,
    description character varying,
    price real,
    image character varying
);


ALTER TABLE public.producto OWNER TO "tdiw-k1";

--
-- Name: producto_category_id_seq; Type: SEQUENCE; Schema: public; Owner: tdiw-k1
--

CREATE SEQUENCE public.producto_category_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.producto_category_id_seq OWNER TO "tdiw-k1";

--
-- Name: producto_category_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: tdiw-k1
--

ALTER SEQUENCE public.producto_category_id_seq OWNED BY public.producto.category_id;


--
-- Name: producto_product_id_seq; Type: SEQUENCE; Schema: public; Owner: tdiw-k1
--

CREATE SEQUENCE public.producto_product_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.producto_product_id_seq OWNER TO "tdiw-k1";

--
-- Name: producto_product_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: tdiw-k1
--

ALTER SEQUENCE public.producto_product_id_seq OWNED BY public.producto.product_id;


--
-- Name: user; Type: TABLE; Schema: public; Owner: tdiw-k1
--

CREATE TABLE public."user" (
    user_id integer NOT NULL,
    name_user character varying,
    surname character varying,
    email character varying,
    adress character varying(30),
    password character varying,
    poblation character varying(30),
    zip_code integer
);


ALTER TABLE public."user" OWNER TO "tdiw-k1";

--
-- Name: user_user_id_seq; Type: SEQUENCE; Schema: public; Owner: tdiw-k1
--

CREATE SEQUENCE public.user_user_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.user_user_id_seq OWNER TO "tdiw-k1";

--
-- Name: user_user_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: tdiw-k1
--

ALTER SEQUENCE public.user_user_id_seq OWNED BY public."user".user_id;


--
-- Name: categorias category_id; Type: DEFAULT; Schema: public; Owner: tdiw-k1
--

ALTER TABLE ONLY public.categorias ALTER COLUMN category_id SET DEFAULT nextval('public.categorias_category_id_seq'::regclass);


--
-- Name: pedidos pedido_id; Type: DEFAULT; Schema: public; Owner: tdiw-k1
--

ALTER TABLE ONLY public.pedidos ALTER COLUMN pedido_id SET DEFAULT nextval('public.pedidos_pedido_id_seq'::regclass);


--
-- Name: pedidos user_id; Type: DEFAULT; Schema: public; Owner: tdiw-k1
--

ALTER TABLE ONLY public.pedidos ALTER COLUMN user_id SET DEFAULT nextval('public.pedidos_user_id_seq'::regclass);


--
-- Name: producto product_id; Type: DEFAULT; Schema: public; Owner: tdiw-k1
--

ALTER TABLE ONLY public.producto ALTER COLUMN product_id SET DEFAULT nextval('public.producto_product_id_seq'::regclass);


--
-- Name: producto category_id; Type: DEFAULT; Schema: public; Owner: tdiw-k1
--

ALTER TABLE ONLY public.producto ALTER COLUMN category_id SET DEFAULT nextval('public.producto_category_id_seq'::regclass);


--
-- Name: user user_id; Type: DEFAULT; Schema: public; Owner: tdiw-k1
--

ALTER TABLE ONLY public."user" ALTER COLUMN user_id SET DEFAULT nextval('public.user_user_id_seq'::regclass);


--
-- Data for Name: categorias; Type: TABLE DATA; Schema: public; Owner: tdiw-k1
--

COPY public.categorias (category_id, name, image) FROM stdin;
2	Woman	/images/categories/woman.png
3	Man	/images/categories/man.png
1	Kids	/../images/categories/kids.png
\.


--
-- Data for Name: linea_pedido; Type: TABLE DATA; Schema: public; Owner: tdiw-k1
--

COPY public.linea_pedido (id, nombre_producto, cantidad, precio_unitario, precio_total) FROM stdin;
\.


--
-- Data for Name: pedidos; Type: TABLE DATA; Schema: public; Owner: tdiw-k1
--

COPY public.pedidos (pedido_id, date, total_products, total_import, user_id) FROM stdin;
\.


--
-- Data for Name: producto; Type: TABLE DATA; Schema: public; Owner: tdiw-k1
--

COPY public.producto (product_id, name, category_id, description, price, image) FROM stdin;
1	Blue ripped jeans	1	Blue ripped jeans	14.99	/images/kids/kid_jeans1.png
4	Dark blue skinny jeans	1	Dark blue skinny jeans	25.99	/images/kids/kid_jeans4.png
2	Dark blue jeans	1	Dark blue jeans	19.99	/images/kids/kid_jeans2.png
5	Snoopy Shirt	1	Snoopy Shirt	14.99	/images/kids/kid_shirt1.png
6	Tom & Jerry shirt	1	Tom & Jerry shirt	19.99	/images/kids/kid_shirt2.png
7	White stripes red shirt	1	White stripes red shirt	25.99	/images/kids/kid_shirt3.png
8	T-Rex shirt	1	T-Rex shirt	19.99	/images/kids/kid_shirt4.png
3	Light gray jeans	1	Light gray jeans	19.99	/images/kids/kid_jeans3.png
9	Yellow patern sweater	1	Yellow patern sweater	25.99	/images/kids/kid_sudadera2.png
10	Four stations sweater	1	Four stations sweater	34.99	/images/kids/kid_sudadera3.png
11	Black&White sweater	1	Black&White sweater	23.99	/images/kids/kid_sudadera4.png
12	Dark blue skinny jeans	3	Dark blue skinny jeans	34.99	/images/man/man_jeans1.png
13	Dark blue ripped jeans	3	Dark blue ripped jeans	29.99	/images/man/man_jeans2.png
14	Black skinny jeans	3	Black skinny jeans	23.99	/images/man/man_jeans3.png
15	Dark blue comfort jeans	3	Dark blue comfort jeans	34.99	/images/man/man_jeans4.png
16	Brown fluffy sweater	1	Brown fluffy sweater	25.99	/images/kids/kid_sudadera1.png
17	Brown shirt	3	Brown shirt	24.99	/images/man/man_shirt1.png
18	Green nike shirt	3	Green nike shirt	34.99	/images/man/man_shirt2.png
19	White Pac-Man shirt	3	White Pac-Man shirt	25.99	/images/man/man_shirt3.png
20	Blue flower shirt	3	Blue flower shirt	25.99	/images/man/man_shirt4.png
21	Purple sweater	3	Purple sweater	25.99	/images/man/man_sudadera1.png
22	Plain Black sweater	3	Plain Black sweater	34.99	/images/man/man_sudadera2.png
23	White comfort sweater	3	White comfort sweater	19.99	/images/man/man_sudadera3.png
24	Brown comfort sweater	3	Brown comfort sweater	23.99	/images/man/man_sudadera4.png
25	Skinny ripped blue jeans	2	Skinny ripped blue jeans	25.99	/images/woman/wom_jeans1.png
26	Green cargo jeans	2	Green cargo jeans	25.99	/images/woman/wom_jeans2.png
27	Light blue wide jeans	2	Light blue wide jeans	34.99	/images/woman/wom_jeans3.png
28	Dark gray jeans	2	Dark gray jeans	34.99	/images/woman/wom_jeans4.png
29	Destiny gray sweater	2	Destiny gray sweater	35.99	/images/woman/wom_swe1.png
30	California sweater	2	California sweater	23.99	/images/woman/wom_swe2.png
31	Black GAP sweater	2	Black GAP sweater	23.99	/images/woman/wom_swe3.png
32	Light gray NIKE sweater	2	Light gray NIKE sweater	25.99	/images/woman/wom_swe4.png
33	Light blue shirt	2	Light blue shirt	19.99	/images/woman/woman_shirt1.png
34	Gray Metallica shirt	2	Gray Metallica shirt	29.99	/images/woman/woman_shirt2.png
36	Gray&Pink anime shirt	2	Gray&Ping anime shirt	23.99	/images/woman/woman_shirt4.png
35	White Jil Sander shirt	2	White Jil Sander shirt	25.99	/images/woman/woman_shirt3.png
\.


--
-- Data for Name: user; Type: TABLE DATA; Schema: public; Owner: tdiw-k1
--

COPY public."user" (user_id, name_user, surname, email, adress, password, poblation, zip_code) FROM stdin;
1	aaron blanco	\N	aaron.blanco@uab.cat		$2y$10$p1qmPR4GDfEbqQ1VW1NYtOsRLMFBfBbXO2MgTjgTgl8FgDrk/TPbq		8001
2	aaronb	\N	aaron2.blanco@uab.cat		$2y$10$SuYVQ0YH/KPmKJ15/uBTl.FjbjcW3phTdklgQEh4YRm5CaP.9fXN2		8002
3	aaaa	\N	asa@gmail.com		$2y$10$mMTn9BLC4NYen5A/5UohOOg7HtE31K2GPlsm6n6UerhClEAH.99Dq		11111
4	Dani	\N	1234@gmail.com		$2y$10$IWtFfxxRLnhfQvJRNKQhEe/L1e2fUUmBeyFqMTsO8kxhZLUMXSViS		12345
5	Daniel 	\N	111@gmail.com		$2y$10$ZGC.Txy0NV.ZEXxBdyEICOtAPuLUM8ykZusTqyKPysN7EeNC0et9m		8120
6	Dani V	\N	12345@gmail.com		$2y$10$cQXTbnKJ3kbs2Q7jyEYjUOnoPJbcl5BSCIKR9eoL7oRjvrXjZPBuC		12222
7	Daniel Villanueva	\N	dani.villanueva206@gmail.com		$2y$10$tWx.V3724oApWYc0onPNnuu7zJqGJ6DsSqbS/Aqxr/8t8Gt9KKKJm		8120
\.


--
-- Name: categorias_category_id_seq; Type: SEQUENCE SET; Schema: public; Owner: tdiw-k1
--

SELECT pg_catalog.setval('public.categorias_category_id_seq', 4, true);


--
-- Name: pedidos_pedido_id_seq; Type: SEQUENCE SET; Schema: public; Owner: tdiw-k1
--

SELECT pg_catalog.setval('public.pedidos_pedido_id_seq', 1, false);


--
-- Name: pedidos_user_id_seq; Type: SEQUENCE SET; Schema: public; Owner: tdiw-k1
--

SELECT pg_catalog.setval('public.pedidos_user_id_seq', 1, false);


--
-- Name: producto_category_id_seq; Type: SEQUENCE SET; Schema: public; Owner: tdiw-k1
--

SELECT pg_catalog.setval('public.producto_category_id_seq', 1, false);


--
-- Name: producto_product_id_seq; Type: SEQUENCE SET; Schema: public; Owner: tdiw-k1
--

SELECT pg_catalog.setval('public.producto_product_id_seq', 36, true);


--
-- Name: user_user_id_seq; Type: SEQUENCE SET; Schema: public; Owner: tdiw-k1
--

SELECT pg_catalog.setval('public.user_user_id_seq', 7, true);


--
-- Name: linea_pedido Línea_pedido_pkey; Type: CONSTRAINT; Schema: public; Owner: tdiw-k1
--

ALTER TABLE ONLY public.linea_pedido
    ADD CONSTRAINT "Línea_pedido_pkey" PRIMARY KEY (id);


--
-- Name: categorias categorias_pkey; Type: CONSTRAINT; Schema: public; Owner: tdiw-k1
--

ALTER TABLE ONLY public.categorias
    ADD CONSTRAINT categorias_pkey PRIMARY KEY (category_id);


--
-- Name: pedidos pedidos_pkey; Type: CONSTRAINT; Schema: public; Owner: tdiw-k1
--

ALTER TABLE ONLY public.pedidos
    ADD CONSTRAINT pedidos_pkey PRIMARY KEY (pedido_id);


--
-- Name: producto producto_pkey; Type: CONSTRAINT; Schema: public; Owner: tdiw-k1
--

ALTER TABLE ONLY public.producto
    ADD CONSTRAINT producto_pkey PRIMARY KEY (product_id);


--
-- Name: user user_pkey; Type: CONSTRAINT; Schema: public; Owner: tdiw-k1
--

ALTER TABLE ONLY public."user"
    ADD CONSTRAINT user_pkey PRIMARY KEY (user_id);


--
-- Name: producto category; Type: FK CONSTRAINT; Schema: public; Owner: tdiw-k1
--

ALTER TABLE ONLY public.producto
    ADD CONSTRAINT category FOREIGN KEY (category_id) REFERENCES public.categorias(category_id) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: pedidos pedido_id; Type: FK CONSTRAINT; Schema: public; Owner: tdiw-k1
--

ALTER TABLE ONLY public.pedidos
    ADD CONSTRAINT pedido_id FOREIGN KEY (pedido_id) REFERENCES public.linea_pedido(id) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: SCHEMA public; Type: ACL; Schema: -; Owner: tdiw-professor
--

REVOKE ALL ON SCHEMA public FROM postgres;
REVOKE ALL ON SCHEMA public FROM PUBLIC;
GRANT ALL ON SCHEMA public TO "tdiw-professor";
GRANT ALL ON SCHEMA public TO "tdiw-k1";


--
-- PostgreSQL database dump complete
--

