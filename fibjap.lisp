;;; Famous フィボナッチ (FIB) Benchmark with Japanese characters

(defun fib (x)
  (labels ((フィボナッチ (n)
             ;; Standard definition
             (cond ((= n 0) 0)
                   ((= n 1) 1)
                   (t (+ (フィボナッチ (1- n)) (フィボナッチ (- n 2)))))))
    (フィボナッチ x)))
