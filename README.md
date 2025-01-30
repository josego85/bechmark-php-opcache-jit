## Description

To perform a benchmark comparing OPcache and JIT in PHP 8, we will measure the execution time of different types of code:

1. Without OPcache or JIT (purely interpreted PHP).
2. With OPcache enabled (but without JIT).
3. With OPcache and JIT enabled.

## Tecnology

- PHP 8.4
- OPcache and JIT
- Docker and Docker Compose

## Execute

```bash
docker-compose build
docker-compose up -d
```

## Browser

- [PHP Info](http://localhost:9000/info.php)
- [JIT](http://localhost:9000/)
- [Benchmark OPcache and JIT](http://localhost:9000/jit-benchmark.php)

## Result Benchmark OPcache and JIT

1. Without Opcache and without JI
   Execute Fibonacci(41)... Result: 165580141 Time: 7.8981 seconds

2. With Opcache and without JIT
   Execute Fibonacci(41)... Result: 165580141 Time: 7.4231 seconds

3. With Opcache and JIT
   Execute Fibonacci(41)... Result: 165580141 Time: 2.6772 seconds
