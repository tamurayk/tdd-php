class TestCase:
    def __init__(self, name):
        self.name = name
    def run(self):
        method = getattr(self, self.name)
        method()

# 「テストが走ったかどうかを答えるテスト」のテスト対象クラス
class WasRun(TestCase):
    def __init__(self, name):
        self.wasRun = None # Python では None が null に相当。評価結果が 偽 となる
        super().__init__(name)
    def testMethod(self):
        self.wasRun = 1

class TestCaseTest(TestCase):
    def testRunning(self):
        test = WasRun("testMethod")
        assert(not test.wasRun)
        test.run()
        assert(test.wasRun)

TestCaseTest("testRunning").run()
